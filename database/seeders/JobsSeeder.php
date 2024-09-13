<?php

namespace Database\Seeders;

use App\Models\Jobs;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\JobsFactory;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
         Jobs::factory(10)->create();
    }
}