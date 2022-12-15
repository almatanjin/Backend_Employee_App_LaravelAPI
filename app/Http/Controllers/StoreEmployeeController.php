<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class StoreEmployeeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $employee = new Employee([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
        ]);
        $employee->save();
        return response()->json('Employee created');
    }
}
