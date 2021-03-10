<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function applied(){
        return view('candidate.applied');
    }
}
