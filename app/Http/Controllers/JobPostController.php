<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function show(JobPost $jobPost){
        $jobPost->load(['company.user']);
        return view('job.show', compact('jobPost'));
    }
}
