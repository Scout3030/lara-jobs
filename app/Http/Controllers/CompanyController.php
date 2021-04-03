<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index(){
        return view('company.index');
    }

    public function create(){
        return view('company.create');
    }

    public function store(CompanyRequest $request){
        Company::create($request->input());
        return back()->with('message', ['status' => 'success', 'message' => __('Company created successfully')]);
    }

    public function datatable(){
        return \Datatables()->of(Company::all())
        ->addColumn('actions', 'company.datatable.actions')
        ->rawColumns(['actions'])
        ->toJson();
    }
}
