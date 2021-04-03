<?php

namespace App\Http\Controllers;

use App\Models\Department;

class DepartmentController extends Controller
{
    public function departmentByCountry(){
        $countryId = request()->countryId;
        $departments = Department::whereCountryId($countryId)
            ->orderBy('name')
            ->get();
        return response()->json($departments);
    }
}
