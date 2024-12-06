<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Attendee;
use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		Event::factory(10)->create(); // Maak 10 evenementen
		Attendee::factory(50)->create(); // Maak 50 deelnemers

		// Make an admin and user role
		Role::factory()->create([
			'name' => 'admin',
			'description' => 'Administrator',
		]);

		Role::factory()->create([
			'name'=> 'user',
			'description'=> 'User',
		]);

		// Create admin user
		User::factory()->create([
			'name' => 'BoyK07',
			'email' => 'boy@sadcat.space',
			'password' => bcrypt('password'),
		]);

		RoleUser::factory()->create([
			'user_id' => 1,
			'role_id' => 1,
		]);

		User::factory(20)->create(); // Maak 20 gebruikers
	}
}
