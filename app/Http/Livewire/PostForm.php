<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;

class PostForm extends Component
{
    public $company;
    public $departments = [];

    protected $listeners = ['searchDepartment' => 'filterDepartments'];

    public function searchDepartment($countryId)
    {
        $this->departments = Department::whereCountryId($countryId)
            ->get();
    }

    public function render()
    {
        return view('livewire.post-form', [
            'departments' => $this->departments,
            'company' => $this->company
        ]);
    }
}
