<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use App\Models\Position;
use App\Models\Recruitment;
use App\Models\SocialBenefit;
use App\Models\Termination;
use App\Models\Training;
use App\Models\Vacation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Position::factory()->count(10)->create();
        Recruitment::factory()->count(10)->create();
        SocialBenefit::factory()->count(10)->create();
        Employee::factory()->count(50)->create();
        Vacation::factory()->count(10)->create();
        Training::factory()->count(50)->create();
        Termination::factory()->count(10)->create();
    }
}
