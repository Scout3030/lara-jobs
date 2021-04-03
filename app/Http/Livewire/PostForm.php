<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;

class PostForm extends Component
{
    public $departments = [];

    protected $listeners = ['searchDepartment' => 'filterDepartments'];

    public function searchDepartment($countryId)
    {
        $this->departments = Department::whereCountryId($countryId)
            ->get();
    }

    public function postAdded(){
        dd(1);
    }

    public function render()
    {
        return view('livewire.post-form', [
            'departments' => $this->departments,
        ]);
    }
}
