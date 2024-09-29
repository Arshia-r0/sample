<?php

namespace Database\Seeders;

use App\Models\ReferralCode;
use App\Models\ReferralRecord;
use App\Models\Score;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ReferralRecord::factory(100)->create();
        Score::factory(100)->create();
    }
}
