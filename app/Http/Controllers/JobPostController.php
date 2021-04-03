<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobPost;
use Illuminate\Http\Request;
use App\Http\Requests\JobPostRequest;

class JobPostController extends Controller
{
    public function create(Company $company){
        return view('job.create', compact('company'));
    }

    public function show(JobPost $jobPost){
        $jobPost->load(['company.user', 'experience']);
        return view('job.show', compact('jobPost'));
    }

    public function store(JobPostRequest $request){
        $jobPost = JobPost::create([
            'job_type_id' => $request->job_type_id,
            'company_id' => $request->company_id,
            'experience_id' => $request->experience_id,
            'currency_id' => 1,
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => \Carbon\Carbon::parse($request->deadline)->format('Y-m-d'),
            'salary' => $request->salary,
            'tag' => $request->tag,
            'how_to_apply' => $request->how_to_apply,
            'vacancies' => $request->vacancies
        ]);
        foreach($request->technologies as $technology_id){
            $jobPost->technologies()->attach($technology_id);
        }
        return back()->with('message', ['status' => 'success', 'message' => __('Job post created successfully')]);
    }

    public function list(){
        $jobPosts = JobPost::query();
        if(request()->has('q') && request()->q != null){
            $query = request()->q;
            $jobPosts = $jobPosts->where('title', 'LIKE', '%'.$query.'%')
                ->orWhere('description', 'LIKE', '%'.$query.'%');
        }
        if(request()->has('jobType') && request()->jobType != null && request()->jobType != 0){
            $jobPosts = $jobPosts->whereJobTypeId(request()->jobType);
        }

        if(request()->has('date') && request()->date != null && request()->date != 0){
            $date = \Carbon\Carbon::now()->subDays(request()->date)->format('Y-m-d'); 
            $jobPosts = $jobPosts->whereDate('created_at', '>=', $date);
        }
        $jobPosts= $jobPosts->orderByDesc('created_at')->paginate(5)->withQueryString();
        return view('job.index', compact('jobPosts'));
    }
}
