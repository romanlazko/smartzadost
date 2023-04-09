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
        Schema::create('mother_occupations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mother_id')->nullable();
            $table->index('mother_id', 'mother_occupation_mother_idx');
            $table->foreign('mother_id', 'mother_occupation_mother_fk')->on('mothers')->references('id');
            
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
        Schema::dropIfExists('mother_occupations');
    }
};
