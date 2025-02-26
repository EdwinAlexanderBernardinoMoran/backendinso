<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Canton;
use App\Models\Career;
use App\Models\Category;
use App\Models\Department;
use App\Models\Municipality;
use App\Models\Zone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Zone::factory(2)->create();
        Canton::factory(4)->create();
        Career::factory(5)->create();
        Category::factory(5)->create();
        Department::factory(3)->create();
        Municipality::factory(2)->create();
    }
}
