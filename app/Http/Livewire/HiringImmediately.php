<?php

namespace App\Http\Livewire;

use App\Models\JobPost;
use Livewire\Component;
use Livewire\WithPagination;

class HiringImmediately extends Component
{
    use WithPagination;

    protected $immediateJobPosts;
    protected $perPage = 3;
    protected $fired = false;

//    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['nextPosts' => 'filteredImmediateJobPosts'];

    public function filteredImmediateJobPosts(){
        $this->immediateJobPosts = JobPost::with(['company'])
            ->where('tag', JobPost::IMMEDIATE)
            ->paginate($this->perPage);
        $this->fired = true;
    }

    public function render()
    {
        if(!$this->fired) {
            $this->immediateJobPosts = JobPost::with(['company'])
                ->where('tag', JobPost::IMMEDIATE)
                ->paginate($this->perPage);
        }

        return view('livewire.hiring-immediately', [
            'immediateJobPosts' => $this->immediateJobPosts
        ]);
    }
}
