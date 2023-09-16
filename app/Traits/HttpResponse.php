<?php

namespace App\Traits;

trait HttpResponses
{
    public function successResponse($data, $message)
    {
        return response()->json([
          'success' => true,
          'message' => $message,
            'data' => $data
        ], 200);
    }

    public function errorResponse($message)
    {
        return response()->json([
          'success' => false,
          'message' => $message
        ], 400);
    }
}
