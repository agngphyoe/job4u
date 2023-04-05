<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobCategory::create([
            'name' => 'Graphic Designer',
            
        ]);
        JobCategory::create([
            'name' => 'Web Developer',
            
        ]);
        JobCategory::create([
            'name' => 'Mobile Developer',
            
        ]);
        JobCategory::create([
            'name' => 'Content Writer',
            
        ]);
        JobCategory::create([
            'name' => 'Human Resources',
            
        ]);
        JobCategory::create([
            'name' => 'Administrator',
            
        ]);
        JobCategory::create([
            'name' => 'General Manager',
            
        ]);
        JobCategory::create([
            'name' => 'Team Leader',
            
        ]);
    }
}
