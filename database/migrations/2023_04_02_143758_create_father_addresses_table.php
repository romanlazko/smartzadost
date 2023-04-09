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
        Schema::create('father_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('father_id')->nullable();
            $table->index('father_id', 'father_address_father_idx');
            $table->foreign('father_id', 'father_address_father_fk')->on('fathers')->references('id');
            
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
        Schema::dropIfExists('father_addresses');
    }
};
