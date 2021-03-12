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

    public function filteredJobPosts($filters = null){
        if($filters){
            dd(array_keys($filters));
        }
        $this->jobPosts = JobPost::with(['company'])
            ->paginate($this->perPage);
        $this->fired = true;
    }

    public function render()
    {
        if(!$this->fired){
            $this->jobPosts = JobPost::with(['company'])
                ->paginate($this->perPage);
        }

        return view('livewire.list-job-post', [
            'jobPosts' => $this->jobPosts
        ]);
    }
}
