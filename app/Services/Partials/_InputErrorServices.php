<?php

namespace App\Services\Partials;

use Illuminate\Support\Facades\Validator;

class _InputErrorServices
{
    // 1. Get rendered error view by string argument.
    public function getErrorViewByString(string $error)
    {
        return $error ? view('partials._input-error', ['error' => $error])->render() : null;
    }

    // 2. Get rendered error view.
    public function getErrorView(object $validator, string $key)
    {
        $error = $validator->errors()->first($key);
        return $this->getErrorViewByString($error);
    }

    // MARK: Get error view JSON response by string argument.
    public function getErrorViewJsonByString(string $error, string $key, array $params = [])
    {
        $error = $this->getErrorViewByString($error);

        return response()->json(array_merge(['errors' => [$key => $error]], $params), 200);
    }

    // MARK: Get single error view JSON response.
    public function getSingleErrorViewJson(object $validator, string $key)
    {
        $error = $this->getErrorView($validator, $key);
        return response()->json(['errors' => [$key => $error]], 200);
    }

    // MARK: Get multiple error views JSON response.
    public function getMultiErrorViewJson(object $validator, ...$args)
    {
        $errors_array = [];
        foreach ($args as $key) {
            $errors_array[$key] = $this->getErrorView($validator, $key);
        }
        return response()->json(['errors' => $errors_array], 200);
    }
}
