<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fake = fake('fa_IR');

        return [
            'phone_number' => "09379853003",
            'password' => Hash::make('123456'),
            'email' => "sajjad.ws@gmail.com",
            'status' => "1",
            'first_name' => "سجاد",
            'last_name' => "آروین",

        ];
    }
}
