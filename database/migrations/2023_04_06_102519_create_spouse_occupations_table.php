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
        Schema::create('spouse_occupations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spouse_id')->nullable();
            $table->index('spouse_id', 'spouse_occupation_spouse_idx');
            $table->foreign('spouse_id', 'occupation_spouse_fk')->on('spouses')->references('id');
            
            $table->text('occupation')->nullable();
            $table->text('employer')->nullable();
            $table->text('street')->nullable();
            $table->text('number')->nullable();
            $table->text('town')->nullable();
            $table->text('country')->nullable();
            $table->text('post_code')->nullable();
            $table->text('contact')->nullable();
            $table->timestamp('from')->nullable();
            $table->timestamp('till')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spouse_occupations');
    }
};
