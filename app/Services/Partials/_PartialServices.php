<?php

namespace App\Services\Partials;

use Illuminate\Http\JsonResponse;

class _PartialServices
{
    /* GLOBAL */
    public function getViewByString(string $view, array $data): string
    {
        return view($view, $data)->render();
    }


    /* ANY */
    public function getViewJsonByString(string $view, array $data, string $keyScope, string $key, array $params = []): JsonResponse
    {
        return response()->json(array_merge([$keyScope => [$key => $this->getViewByString($view, $data)]], $params), 200);
    }

    public function getMultiErrorViewJsonByString(string $view, array $data, string $keyScope, string $key, ...$args): JsonResponse
    {
        $array = [$key => $this->getViewByString($view, $data)];
        foreach ($args as $key_) $array[$key_] = "";
        return response()->json(array_merge([$keyScope => $array]), 200);
    }


    /* ERRORS */
    public function getErrorView(string $view, object $validator, string $key): string
    {
        return $this->getViewByString($view, ["error" => $validator->errors()->first($key)]);
    }

    public function getSingleErrorViewJson(string $view, object $validator, string $key): JsonResponse
    {
        return response()->json(['errors' => [$key => $this->getErrorView($view, $validator, $key)]], 200);
    }

    public function getMultiErrorViewJson(string $view, object $validator, ...$args): JsonResponse
    {
        $errors_array = [];
        foreach ($args as $key) $errors_array[$key] = $this->getErrorView($view, $validator, $key);
        return response()->json(['errors' => $errors_array], 200);
    }
}
