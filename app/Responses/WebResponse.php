<?php

namespace App\Responses;

use Illuminate\Http\JsonResponse;

class WebResponse
{
    public static function respondOk(string $action = null, array|null $messages = null, mixed $data = null): JsonResponse
    {
        $response = self::structure();
        $response['action'] = $action;
        $response['success'] = true;
        $response['data'] = $data;
        if ($messages) {
            foreach ($messages as $message) {
                $response['user_messages'][] = $message;
            }
        }

        return response()->json($response);
    }

    public static function respondNotFound(string $action = null, array|null $messages = null, mixed $data = null): JsonResponse
    {
        $response = self::structure();
        $response['action'] = $action;
        $response['success'] = false;
        $response['data'] = $data;
        if ($messages) {
            foreach ($messages as $message) {
                $response['user_messages'][] = $message;
            }
        }

        return response()->json($response, 404);
    }

    private static function structure(): array
    {
        return [
            'action' => null,
            'success' => null,
            'user_messages' => [],
            'data' => []
        ];
    }
}
