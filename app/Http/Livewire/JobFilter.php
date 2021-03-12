<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JobFilter extends Component
{
    public $jobType;
    public $datePosted;

    protected $queryString = [
        'jobType',
        'datePosted'
    ];

    public function render()
    {
        return view('livewire.job-filter');
    }

    public function filterPosts($filter, $value){
        $this->emit('searchingPosts', [$filter => $value]);
    }
}
