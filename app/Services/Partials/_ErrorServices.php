<?php

namespace App\Services\Partials;

use Illuminate\Http\JsonResponse;

class _ErrorServices
{
    // 1. Get rendered error view by string argument.
    public function getErrorViewByString(string $view, string $error): string
    {
        return $error ? view($view, ['error' => $error])->render() : "";
    }

    // 2. Get rendered error view.
    public function getErrorView(string $view, object $validator, string $key): string
    {
        $error = $validator->errors()->first($key);
        return $this->getErrorViewByString($view, $error);
    }

    // MARK: Get error view JSON response by string argument.
    public function getErrorViewJsonByString(string $view, string $error, string $key, array $params = []): JsonResponse
    {
        $error = $this->getErrorViewByString($view, $error);

        return response()->json(array_merge(['errors' => [$key => $error]], $params), 200);
    }

    // MARK: Get error view JSON response by string argument.
    public function getMultiErrorViewJsonByString(string $view, string $error, string $key, ...$args): JsonResponse
    {
        $error = $this->getErrorViewByString($view, $error);
        $errors_array = [$key => $error];
        foreach ($args as $key_) {
            $errors_array[$key_] = "";
        }
        return response()->json(array_merge(['errors' => $errors_array]), 200);
    }

    // MARK: Get single error view JSON response.
    public function getSingleErrorViewJson(string $view, object $validator, string $key): JsonResponse
    {
        $error = $this->getErrorView($view, $validator, $key);
        return response()->json(['errors' => [$key => $error]], 200);
    }

    // MARK: Get multiple error views JSON response.
    public function getMultiErrorViewJson(string $view, object $validator, ...$args): JsonResponse
    {
        $errors_array = [];
        foreach ($args as $key) {
            $errors_array[$key] = $this->getErrorView($view, $validator, $key);
        }
        return response()->json(['errors' => $errors_array], 200);
    }
}
