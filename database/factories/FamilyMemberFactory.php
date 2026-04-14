<?php

namespace Database\Factories;

use App\Enums\EducationStatus;
use App\Enums\EmploymentStatus;
use App\Enums\Gender;
use App\Enums\HealthStatus;
use App\Enums\MaritalStatus;
use App\Enums\RelationToHead;
use App\Models\Family;
use App\Models\FamilyMember;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyMemberFactory extends Factory
{
    protected $model = FamilyMember::class;

    public function definition(): array
    {
        return [
            'family_id' => Family::factory(),
            'name' => fake()->name(),
            'relation_to_head' => fake()->randomElement(RelationToHead::cases()),
            'gender' => fake()->randomElement(Gender::cases()),
            'birth_date' => fake()->dateTimeBetween('-70 years', '-1 years'),
            'marital_status' => fake()->randomElement(MaritalStatus::cases()),
            'education_status' => fake()->randomElement(EducationStatus::cases()),
            'employment_status' => fake()->randomElement(EmploymentStatus::cases()),
            'health_status' => fake()->randomElement(HealthStatus::cases()),
            'monthly_income' => fake()->randomFloat(2, 0, 12000),
            'national_id' => fake()->optional()->numerify('##############'),
            'phone' => fake()->optional()->phoneNumber(),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
