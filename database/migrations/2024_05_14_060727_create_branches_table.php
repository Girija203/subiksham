<?php

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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->longText('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->longText('landmark')->nullable();
            $table->decimal('kms', 8, 2)->nullable(); // Decimal field for storing distance in kilometers
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
