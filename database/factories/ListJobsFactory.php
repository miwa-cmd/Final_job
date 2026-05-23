<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListJobsFactory extends Factory
{
    public function definition(): array
    {
        $jobs = [
            ['Junior Web Developer','TechNova Solutions','Manila City',22000],
            ['Frontend Developer','PixelForge Studio','Quezon City',28000],
            ['Backend Developer','CloudStack Systems','Makati City',35000],
            ['IT Support Specialist','NetCore Technologies','Dagupan City',20000],
            ['UI/UX Designer','Creative Minds Digital','Pasig City',30000],
        ];

        $job = fake()->randomElement($jobs);

        return [
            'title' => $job[0],
            'description' => fake()->sentence(12),
            'company' => $job[1],
            'location' => $job[2],
            'salary' => $job[3],
        ];
    }
}
