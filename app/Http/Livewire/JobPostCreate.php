<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JobPostCreate extends Component
{
    public $company;

    public function render()
    {
        return view('livewire.job-post-create', [
            'company' => $this->company
        ]);
    }
}
