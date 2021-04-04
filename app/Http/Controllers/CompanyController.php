<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function index(){
        return view('admin.company.index');
    }

    public function create(){
        return view('admin.company.create');
    }

    public function store(CompanyRequest $request){
        $logo = Helper::uploadFile('logo', 'companies');
        $request->merge(['logo' => $logo]);
        Company::create($request->input());
        return back()->with('message', ['status' => 'success', 'message' => __('Company created successfully')]);
    }

    public function datatable(){
        return \Datatables()->of(Company::all())
        ->addColumn('actions', 'admin.company.datatable.actions')
        ->rawColumns(['actions'])
        ->toJson();
    }
}
