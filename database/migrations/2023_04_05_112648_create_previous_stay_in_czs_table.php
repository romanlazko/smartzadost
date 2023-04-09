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
        Schema::create('previous_stay_in_czs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'previous_stay_in_cz_user_idx');
            $table->foreign('user_id', 'previous_stay_in_cz_user_fk')->on('users')->references('id');

            $table->timestamp('date_of_arrival')->nullable();
            $table->text('purpose_of_stay')->nullable();
            $table->text('place_of_stay')->nullable();
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
        Schema::dropIfExists('previous_stay_in_czs');
    }
};
