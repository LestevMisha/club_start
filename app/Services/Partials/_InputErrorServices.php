<?php

namespace App\Services\Partials;

use Illuminate\Http\JsonResponse;

class _InputErrorServices
{
    // 1. Get rendered error view by string argument.
    public function getErrorViewByString(string $error): string
    {
        return $error ? view('partials._input-error', ['error' => $error])->render() : "";
    }

    // 2. Get rendered error view.
    public function getErrorView(object $validator, string $key): string
    {
        $error = $validator->errors()->first($key);
        return $this->getErrorViewByString($error);
    }

    // MARK: Get error view JSON response by string argument.
    public function getErrorViewJsonByString(string $error, string $key, array $params = []): JsonResponse
    {
        $error = $this->getErrorViewByString($error);

        return response()->json(array_merge(['errors' => [$key => $error]], $params), 200);
    }

    // MARK: Get error view JSON response by string argument.
    public function getMultiErrorViewJsonByString(string $error, string $key, ...$args): JsonResponse
    {
        $error = $this->getErrorViewByString($error);
        $errors_array = [$key => $error];
        foreach ($args as $key_) {
            $errors_array[$key_] = "";
        }
        return response()->json(array_merge(['errors' => $errors_array]), 200);
    }

    // MARK: Get single error view JSON response.
    public function getSingleErrorViewJson(object $validator, string $key): JsonResponse
    {
        $error = $this->getErrorView($validator, $key);
        return response()->json(['errors' => [$key => $error]], 200);
    }

    // MARK: Get multiple error views JSON response.
    public function getMultiErrorViewJson(object $validator, ...$args): JsonResponse
    {
        $errors_array = [];
        foreach ($args as $key) {
            $errors_array[$key] = $this->getErrorView($validator, $key);
        }
        return response()->json(['errors' => $errors_array], 200);
    }
}
