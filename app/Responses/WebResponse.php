<?php

namespace App\Responses;

use Illuminate\Http\JsonResponse;

class WebResponse
{
    public static function respondOk(string $action = null, array $messages = [], array $data = []): JsonResponse
    {
        $response = self::structure();
        $response['action'] = $action;
        $response['success'] = true;
        $data ?? $response['data'] = $data;
        if ($messages) {
            foreach ($messages as $key => $value) {
                $response['user_messages'][$key] = $value;
            }
        }

        return response()->json([$response]);
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
