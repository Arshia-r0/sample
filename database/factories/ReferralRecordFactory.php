<?php

namespace Database\Factories;

use App\Models\ReferralCode;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReferralRecord>
 */
class ReferralRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'referral_code_id' => ReferralCode::factory(),
            'user_id' => User::factory(),
        ];
    }
}
