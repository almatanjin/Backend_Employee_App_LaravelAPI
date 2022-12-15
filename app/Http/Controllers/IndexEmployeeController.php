<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class IndexEmployeeController extends Controller
{
   
    public function __invoke(Request $request)
    {
        $employees = Employee::all();
        return response()->json($employees);
    }
}
