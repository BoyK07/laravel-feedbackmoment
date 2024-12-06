<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::orderBy("id", "desc")->paginate(25);
        return view("roles.index", compact("roles"));
    }

    public function create() {
        return view("roles.create");
    }

    public function store(Request $request) {
        $this->validate($request, [
            "name" => "required|unique:roles",
            "description" => "required",
        ]);

        Role::create([
            "name" => $request->name,
            "description" => $request->description,
        ]);

        return redirect()->route("roles.index")->with("success", "Role created successfully");
    }

    public function edit($roleId) {
        $role = Role::findOrFail($roleId);
        return view("roles.edit", compact("role"));
    }

    public function update(Request $request, $roleId) {
        $this->validate($request, [
            "name" => "required|unique:roles,name," . $roleId,
            "description" => "required",
        ]);

        $role = Role::findOrFail($roleId);
        $role->update([
            "name" => $request->name,
            "description" => $request->description,
        ]);

        return redirect()->route("roles.index")->with("success", "Role updated successfully");
    }

    public function destroy($roleId) {
        $role = Role::findOrFail($roleId);
        $role->delete();

        return redirect()->route("roles.index")->with("success", "Role deleted successfully");
    }
}
