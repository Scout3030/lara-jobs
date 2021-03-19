<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function dashboard(){
        $appliedJobs = auth()->user()->candidate->jobPosts;
        $viewedJobs = auth()->user()->candidate->viewedJobs;
        $viewedJobs->load([
            'company'
        ]);
        return view('candidate.dashboard', compact('appliedJobs', 'viewedJobs'));
    }
    public function applied(){
        return view('candidate.applied');
    }
}
