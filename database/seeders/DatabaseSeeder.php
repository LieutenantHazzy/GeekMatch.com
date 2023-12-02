<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'one_time' => 'NULL',
             'name' => 'Admin',
             'email' => 'admin.com',
             'password' => '2',
             'is_admin' => '1',
             'first_name' => 'Admin',
             'Last_name' => 'Admin',
             'dob' => '2004-01-10',

         ]);
    }
}
