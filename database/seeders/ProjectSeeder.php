<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Project;
use Illuminate\Support\Facades\Schema;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function() {
            Project::truncate();
        });
        // Project::truncate();

        for ($i=0; $i < 20; $i++) { 
            
            Project::create([
                'title' => fake()->sentence(),
                'author' => fake()->name(),
                'date_create' => fake()->date(),
                'description' => fake()->paragraph(),
            ]);
        }
    }
}
