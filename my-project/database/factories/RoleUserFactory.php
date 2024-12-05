<?php

namespace Database\Factories;

use App\Models\RoleUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleUserFactory extends Factory
{
    protected $model = RoleUser::class;

    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'role_id' => \App\Models\Role::factory(),
        ];
    }
}
