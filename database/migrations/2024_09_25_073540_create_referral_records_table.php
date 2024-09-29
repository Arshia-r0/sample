<?php

use App\Models\ReferralCode;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('referral_records', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ReferralCode::class);
            $table->foreignIdFor(\App\Models\User::class);
            $table->boolean('signed_up')->default(false);
            $table->boolean('is_bought')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_records');
    }
};
