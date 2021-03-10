<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function show(JobPost $jobPost){
        $jobPost->load(['company.user', 'province.department.country']);
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

    public function search(){
//        $query = request()->search;
//        $jobPost = JobPost::where('title', 'LIKE', '%'.$query.'%')
//            ->orWhere('description', 'LIKE', '%'.$query.'%')
//            ->paginate(10);
//        return view('job.index', compact('jobPost'));
    }
}
