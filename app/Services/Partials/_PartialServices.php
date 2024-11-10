<?php

namespace App\Services\Partials;

use Illuminate\Http\JsonResponse;

class _PartialServices
{
    /**
     * Summary of renderViewToString
     * @param string $view
     * @param array $data
     * @return string
     */
    public function renderViewToString(string $viewName, string $data): string
    {
        return view($viewName, ["data" => $data])->render();
    }

    /**
     * Summary of renderMessage
     * @param string $viewName
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function renderMessage(string $viewName, string $message): JsonResponse
    {
        // Render the view to a string
        $renderedView = $this->renderViewToString($viewName, $message);

        // Create the JSON response structure
        $responseData = array_merge(["backend" => ["message" => $renderedView]]);
        return response()->json($responseData, 200);
    }

    /**
     * Summary of renderValidatorErrors
     * @param string $viewName
     * @param object $validator
     * @return \Illuminate\Http\JsonResponse
     */
    public function renderValidatorErrors(string $viewName, object $validator): JsonResponse
    {
        $errors_array = [];
        // Iterate through each field
        foreach ($validator->errors()->getMessages() as $field => $errors) {
            // Render each message for the field
            foreach ($errors as $error) {
                $errors_array[$field] = $this->renderViewToString($viewName, $error);
            }
        }
        return response()->json(["backend" => ['errors' => $errors_array]], 200);
    }


    /**
     * Summary of renderErrors
     * @param array $errors
     * @param string $viewName
     * @param array $params
     * @return \Illuminate\Http\JsonResponse
     */
    public function renderErrors(array $errors, string $viewName, array $params = []): JsonResponse
    {
        $errors_array = [];
        // Iterate through each error
        foreach ($errors as $key => $error) {
            $errors_array[$key] = $error === "" ? "" : $this->renderViewToString($viewName, $error);
        }

        // Create JSON response structure, incorporate additional parameters if needed
        $responseData = ["backend" => array_merge(['errors' => $errors_array], $params)];

        return response()->json($responseData, 200);
    }
}
