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
        Schema::create('sibling_passports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sibling_id')->nullable();
            $table->index('sibling_id', 'sibling_passport_sibling_idx');
            $table->foreign('sibling_id', 'sibling_passport_sibling_fk')->on('siblings')->references('id');
            
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
        Schema::dropIfExists('sibling_passports');
    }
};
