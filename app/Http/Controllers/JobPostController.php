<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobPostRequest;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function show(JobPost $jobPost){
        $jobPost->load(['company.user', 'province.department.country']);
        return view('job.show', compact('jobPost'));
    }

    public function store(JobPostRequest $request){
        dd($request->all());
        $jobPost = JobPost::create([
            'job_type_id' => $request->job_type_id,
            'experience_id' => $request->experience_id,
            'province_id' => 123,
            'currency_id' => 3,
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => \Carbon\Carbon::parse($request->deadline)->format('Y-m-d'),
            'salary' => $request->salary,
            'tag' => $request->tag,
        ]);

        foreach($request->technologies as $technology_id){
            $jobPost->technologies()->attach($technology_id);
        }

        return back()->with('message', ['status' => 'success', 'message' => __('Oferta creada correctamente')]);
    }

    public function list(){
        $jobPosts = JobPost::query();
        if(request()->has('q') && request()->q != null){
            $query = request()->q;
            $jobPosts = $jobPosts->where('title', 'LIKE', '%'.$query.'%')
                ->orWhere('description', 'LIKE', '%'.$query.'%');
        }
        $jobPosts= $jobPosts->paginate(5);
        return view('job.index', compact('jobPosts'));
    }
}
