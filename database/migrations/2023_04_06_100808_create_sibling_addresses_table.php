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
        Schema::create('sibling_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sibling_id')->nullable();
            $table->index('sibling_id', 'sibling_address_sibling_idx');
            $table->foreign('sibling_id', 'sibling_address_sibling_fk')->on('siblings')->references('id');
            
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
        Schema::dropIfExists('sibling_addresses');
    }
};
