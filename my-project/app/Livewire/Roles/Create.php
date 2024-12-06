<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use App\Models\Role;

class Create extends Component
{
    public $name;
    public $description;

    protected $rules = [
        'name' => 'required|unique:roles',
        'description' => 'required',
    ];

    public function store()
    {
        $this->validate();

        Role::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Role created successfully');
        return redirect()->route('roles.index');
    }

    public function render()
    {
        return view('livewire.roles.create');
    }
}
