<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\Component;
use Livewire\WithPagination;

class ListJobPost extends Component
{
    use WithPagination;

    protected $jobPosts;
    protected $perPage = 5;
    protected $fired = false;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['searchingPosts' => 'filteredJobPosts'];

    public function filteredJobPosts(){
        $this->jobPosts = JobPost::orderByDesc('created_at')
            ->with(['company'])
            ->paginate($this->perPage);
        $this->fired = true;
    }

    public function render()
    {
        if(!$this->fired){
            $this->jobPosts = JobPost::orderByDesc('created_at')
                ->with(['company'])
                ->paginate($this->perPage);
        }

        return view('livewire.list-job-post', [
            'jobPosts' => $this->jobPosts
        ]);
    }
}
