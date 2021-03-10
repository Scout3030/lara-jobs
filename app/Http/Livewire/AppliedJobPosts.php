<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\Component;
use Livewire\WithPagination;

class AppliedJobPosts extends Component
{
    use WithPagination;

    protected $appliedJobPosts;
    protected $perPage = 5;
    protected $fired = false;

    protected $paginationTheme = 'bootstrap';

    public function filteredJobPosts(){
//        $this->appliedJobPosts = JobPost::with(['candidates' => function($q) {
//            $q->where('candidate_id', auth()->user()->candidate->id)->get();
//        }])->paginate($this->perPage);

        $this->appliedJobPosts = JobPost::whereHas('candidates', function($q) {
            $q->where('candidate_id', auth()->user()->candidate->id);
        })->paginate($this->perPage);

//        $this->appliedJobPosts = auth()->user()->candidate->jobPosts
//            ->paginate($this->perPage);
//        $this->fired = true;
    }

    public function render()
    {
//        if(!$this->fired){
//            $this->appliedJobPosts = auth()->user()->candidate->jobPosts
//                ->paginate($this->perPage);
//        }

        return view('livewire.applied-job-posts',[
                'appliedJobPosts' => $this->appliedJobPosts
            ]);
    }
}
