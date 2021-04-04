<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $topCompanies = Company::with(['user'])->take(6)->get();
        return view('home.index', compact('topCompanies'));
    }
}
