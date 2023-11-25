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
             'name' => 'Lieutenant',
             'email' => '40julian02@gmail.com',
             'password' => '2',
             'is_admin' => '1',
             'first_name' => 'Julian',
             'Last_name' => 'Peters',
             'dob' => '2004-01-10',

         ]);
    }
}
