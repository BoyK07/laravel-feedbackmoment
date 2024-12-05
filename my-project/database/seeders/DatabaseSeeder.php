<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Attendee;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Event::factory(10)->create();        // Maak 10 evenementen
        Attendee::factory(50)->create();     // Maak 50 deelnemers
        User::factory(20)->create();         // Maak 20 gebruikers
        Role::factory(5)->create();          // Maak 5 rollen
        \App\Models\RoleUser::factory(20)->create();     // Maak 20 role_user relaties


        // Create admin user
        User::factory()->create([
            'name' => 'BoyK07',
            'email' => 'boy@sadcat.space',
            'password' => bcrypt('password'),
        ]);
    }
}
