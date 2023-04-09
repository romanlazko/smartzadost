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
        Schema::create('spouse_passports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spouse_id')->nullable();
            $table->index('spouse_id', 'spouse_passport_spouse_idx');
            $table->foreign('spouse_id', 'spouse_passport_spouse_fk')->on('spouses')->references('id');
            
            $table->text('number')->nullable();
            $table->text('country')->nullable();
            $table->text('nationality')->nullable();
            $table->text('country_of_birth')->nullable();
            $table->text('place_of_birth')->nullable();
            $table->text('authority')->nullable();
            $table->timestamp('issued')->nullable();
            $table->timestamp('expires')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spouse_passports');
    }
};
