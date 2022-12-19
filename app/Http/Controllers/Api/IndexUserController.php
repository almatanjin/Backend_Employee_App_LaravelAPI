<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IndexUserController extends Controller
{
   
    public function __invoke(Request $request)
    {
        $users = User::all();

        return response()->json([
            "status" => "success",
            "data" => $users
        ]);
    }
}
