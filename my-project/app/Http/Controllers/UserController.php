<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy("id", "desc")->paginate(25);
        return view("users.index", compact("users"));
    }

    public function create() {
        $roles = Role::all();
        return view("users.create", compact("roles"));
    }

    public function store(Request $request) {
        $this->validate($request, [
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
            "password_confirmation" => "required|same:password",
            "roles" => "required|array"
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        $user->roles()->sync($request->roles);

        return redirect()->route("users.index")->with("success", "User created successfully");
    }

    public function edit($userId) {
        $user = User::findOrFail($userId);
        $roles = Role::all();

        return view("users.edit", compact("user", "roles"));
    }

    public function update(Request $request, $userId) {
        $this->validate($request, [
            "name" => "required",
            "email" => "required|email|unique:users,email," . $userId,
            "roles" => "required|array"
        ]);

        $user = User::findOrFail($userId);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);

        $user->roles()->sync($request->roles);

        return redirect()->route("users.index")->with("success", "User updated successfully");
    }

    public function destroy($userId) {
        $user = User::findOrFail($userId);
        $user->delete();

        return redirect()->route("users.index")->with("success", "User deleted successfully");
    }
}
