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
        Schema::create('green_blanks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'green_blank_user_idx');
            $table->foreign('user_id', 'green_blank_user_fk')->on('users')->references('id');

            $table->unsignedBigInteger('application')->nullable();
            $table->text('purpose_of_stay')->nullable();
            $table->unsignedBigInteger('downloads')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('green_blanks');
    }
};
