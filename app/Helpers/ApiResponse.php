<?php
namespace App\Helpers;

class ApiResponse
{
    public static function success($message = 'Success', $data = null, $statusCode = 200)
    {
        return response()->json(['status' => 'success', 'message' => $message, 'data' => $data], $statusCode);
    }

    public static function successWithToken($message = 'Logged in', $token, $statusCode = 200)
    {
        return response()->json(['status' => 'success', 'message' => $message, 'token' => $token], $statusCode);
    }

    public static function error($message = 'Error', $statusCode = 400)
    {
        return response()->json(['status' => 'error', 'message' => $message], $statusCode);
    }
}