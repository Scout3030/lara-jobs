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
            'job_type_id' => $request->job_type_id,
            'province_id' => 123,
            'currency_id' => 3,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return back()->with('message', ['status' => 'success', 'message' => __('Oferta creada correctamente')]);
    }

    public function search(){
//        $query = request()->search;
//        $jobPost = JobPost::where('title', 'LIKE', '%'.$query.'%')
//            ->orWhere('description', 'LIKE', '%'.$query.'%')
//            ->paginate(10);
//        return view('job.index', compact('jobPost'));
    }
}
