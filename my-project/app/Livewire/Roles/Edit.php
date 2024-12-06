<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use App\Models\Role;

class Edit extends Component
{
    public $roleId;
    public $name;
    public $description;

    public function mount($roleId)
    {
        $role = Role::findOrFail($roleId);
        $this->roleId = $role->id;
        $this->name = $role->name;
        $this->description = $role->description;
    }

    protected function rules()
    {
        return [
            'name' => 'required|unique:roles,name,' . $this->roleId,
            'description' => 'required',
        ];
    }

    public function update()
    {
        $this->validate();

        $role = Role::findOrFail($this->roleId);
        $role->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Role updated successfully');
        return redirect()->route('roles.index');
    }

    public function render()
    {
        return view('livewire.roles.edit');
    }
}
