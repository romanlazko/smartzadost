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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'child_user_idx');
            $table->foreign('user_id', 'child_user_fk')->on('users')->references('id');

            $table->text('surname')->nullable();
            $table->text('other_names')->nullable();
            $table->text('all_previous_surnames')->nullable();
            $table->text('first_name')->nullable();
            $table->timestamp('birth')->nullable();
            $table->text('sex')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
