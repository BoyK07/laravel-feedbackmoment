<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $roles = Role::orderBy('id', 'desc')->paginate(25);
        return view('livewire.roles.index', compact('roles'));
    }

    public function delete($roleId)
    {
        $role = Role::findOrFail($roleId);
        $role->delete();

        session()->flash('success', 'Role deleted successfully');
    }
}
