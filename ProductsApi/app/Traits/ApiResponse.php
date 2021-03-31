<?php 
namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse {
    // Success Response
    public function successResponse($data, $statusCode = Response::HTTP_OK) {
        return response()->json(['data' => $data], $statusCode);
    }

    // Error Response 
    public function errorResponse($errorMessage, $statusCode) {
        return response()->json(['error' => $errorMessage, 'error_code' => $statusCode], $statusCode);
    }
}