<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ShowEmployeeController extends Controller
{
    
    public function __invoke($id,Request $request)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }
}
