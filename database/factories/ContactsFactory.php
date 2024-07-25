<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\contacts;

class ContactsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contacts::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'service_id' => Service::factory(),
            'name' => $this->faker->name(),
            'business_name' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'no_whatsapp' => $this->faker->word(),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(["unread","read","contacted"]),
        ];
    }
}
