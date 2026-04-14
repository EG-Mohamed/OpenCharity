<?php

namespace Database\Factories;

use App\Enums\DocumentCategory;
use App\Enums\DocumentType;
use App\Enums\DocumentVisibility;
use App\Models\CharityCase;
use App\Models\Document;
use App\Models\Family;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition(): array
    {
        return [
            'family_id' => fake()->boolean(70) ? Family::factory() : null,
            'charity_case_id' => fake()->boolean(70) ? CharityCase::factory() : null,
            'type' => fake()->randomElement(DocumentType::cases()),
            'category' => fake()->randomElement(DocumentCategory::cases()),
            'title' => fake()->sentence(3),
            'file_path' => 'documents/'.fake()->uuid().'.pdf',
            'file_name' => fake()->slug().'.pdf',
            'mime_type' => 'application/pdf',
            'file_size' => fake()->numberBetween(10000, 5000000),
            'visibility' => fake()->randomElement(DocumentVisibility::cases()),
            'issued_at' => fake()->boolean(70) ? fake()->dateTimeBetween('-2 years', 'now') : null,
            'expires_at' => fake()->boolean(30) ? fake()->dateTimeBetween('now', '+2 years') : null,
            'is_required' => fake()->boolean(50),
            'is_verified' => fake()->boolean(50),
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
