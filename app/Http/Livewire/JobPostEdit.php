<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JobPostEdit extends Component
{
    public $jobPost;

    public function render()
    {
        return view('livewire.job-post-edit', [
            'jobPost' => $this->jobPost
        ]);
    }
}
