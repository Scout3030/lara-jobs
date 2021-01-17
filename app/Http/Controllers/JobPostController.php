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

    public function store(Request $request){
        JobPost::create([
            'title' => $request->title,
            'job_type_id' => $request->job_type_id,
            'description' => $request->description
        ]);
        return view('job.create');
    }
}
