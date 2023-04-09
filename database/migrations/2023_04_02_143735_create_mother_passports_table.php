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
        Schema::create('mother_passports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mother_id')->nullable();
            $table->index('mother_id', 'mother_passport_mother_idx');
            $table->foreign('mother_id', 'mother_passport_mother_fk')->on('mothers')->references('id');
            
            $table->text('number')->nullable();
            $table->text('country')->nullable();
            $table->text('nationality')->nullable();
            $table->text('country_of_birth')->nullable();
            $table->text('place_of_birth')->nullable();
            $table->timestamp('issued')->nullable();
            $table->timestamp('expires')->nullable();
            $table->text('authority')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mother_passports');
    }
};
