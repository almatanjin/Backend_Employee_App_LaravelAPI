<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class EditUserController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "string",
            'email' => 'email'
        ]);

        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $payload = $validator->validated();
    
        $request->user()->update($payload);

        return response()->json([
            "status" => "success",
            "data" => Auth::user()
        ]);
    
    }
}
