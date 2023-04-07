<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //change values to change numbers of data
        // + change each factory accordingly 
        //[only project and task factories]
        User::factory(2)->create(); //2 users
        Project::factory(6)->create(); // 6 projects
        Task::factory(10)->create(); // 10 tasks
    }
}
