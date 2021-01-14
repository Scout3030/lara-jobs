<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $jobPosts = JobPost::with(['company'])
            ->paginate(5);

        $topCompanies = Company::with(['user'])->take(6)->get();
        return view('home.index', compact('jobPosts', 'topCompanies'));
    }
}
