<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

// Models
use App\Models\{
    Project,
    Type
};

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
            $randomType = Type::inRandomOrder()->first();
            
            Project::create([
                'title' => fake()->sentence(),
                'author' => fake()->name(),
                'date_create' => fake()->date(),
                'description' => fake()->paragraph(),
                'type_id' => $randomType->id
            ]);
        }
    }
}