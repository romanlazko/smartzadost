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
        Schema::create('employment_after_arrivals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'employment_after_arrival_user_idx');
            $table->foreign('user_id', 'employment_after_arrival_user_fk')->on('users')->references('id');

            $table->text('employer')->nullable();
            $table->text('position')->nullable();
            $table->text('street')->nullable();
            $table->text('number')->nullable();
            $table->text('town')->nullable();
            $table->text('country')->nullable();
            $table->text('post_code')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_after_arrivals');
    }
};
