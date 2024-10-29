<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $newEmployee = new Employee();
            $newEmployee->name = $faker->name();
            $newEmployee->last_name = $faker->lastName();
            $newEmployee->address = $faker->address();
            $newEmployee->phone_number = $faker->randomNumber(9, true);
            $newEmployee->age = $faker->numberBetween(18, 60);
            $newEmployee->nationality = $faker->country();
            $newEmployee->driving_license = $faker->boolean();
            $newEmployee->save();
        }
    }
}