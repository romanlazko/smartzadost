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
        Schema::table('personals', function (Blueprint $table) {
            $table->date('birth')->nullable()->change();
        });

        Schema::table('occupations', function (Blueprint $table) {
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('passports', function (Blueprint $table) {
            $table->date('issued')->nullable()->change();
            $table->date('expires')->nullable()->change();
        });

        Schema::table('previous_stay_in_czs', function (Blueprint $table) {
            $table->date('date_of_arrival')->nullable()->change();
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('education', function (Blueprint $table) {
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('children', function (Blueprint $table) {
            $table->date('birth')->nullable()->change();
        });

        Schema::table('child_occupations', function (Blueprint $table) {
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('child_passports', function (Blueprint $table) {
            $table->date('issued')->nullable()->change();
            $table->date('expires')->nullable()->change();
        });

        Schema::table('fathers', function (Blueprint $table) {
            $table->date('birth')->nullable()->change();
        });

        Schema::table('father_occupations', function (Blueprint $table) {
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('father_passports', function (Blueprint $table) {
            $table->date('issued')->nullable()->change();
            $table->date('expires')->nullable()->change();
        });

        Schema::table('mothers', function (Blueprint $table) {
            $table->date('birth')->nullable()->change();
        });

        Schema::table('mother_occupations', function (Blueprint $table) {
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('mother_passports', function (Blueprint $table) {
            $table->date('issued')->nullable()->change();
            $table->date('expires')->nullable()->change();
        });

        Schema::table('siblings', function (Blueprint $table) {
            $table->date('birth')->nullable()->change();
        });

        Schema::table('sibling_occupations', function (Blueprint $table) {
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('sibling_passports', function (Blueprint $table) {
            $table->date('issued')->nullable()->change();
            $table->date('expires')->nullable()->change();
        });

        Schema::table('spouses', function (Blueprint $table) {
            $table->date('birth')->nullable()->change();
        });

        Schema::table('spouse_occupations', function (Blueprint $table) {
            $table->date('from')->nullable()->change();
            $table->date('till')->nullable()->change();
        });

        Schema::table('spouse_passports', function (Blueprint $table) {
            $table->date('issued')->nullable()->change();
            $table->date('expires')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personals', function (Blueprint $table) {
            $table->timestamp('birth')->change();
        });

        Schema::table('occupations', function (Blueprint $table) {
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('passports', function (Blueprint $table) {
            $table->timestamp('issued')->change();
            $table->timestamp('expires')->change();
        });

        Schema::table('previous_stay_in_czs', function (Blueprint $table) {
            $table->timestamp('date_of_arrival')->change();
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('education', function (Blueprint $table) {
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('children', function (Blueprint $table) {
            $table->timestamp('birth')->change();
        });

        Schema::table('child_occupations', function (Blueprint $table) {
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('child_passports', function (Blueprint $table) {
            $table->timestamp('issued')->change();
            $table->timestamp('expires')->change();
        });

        Schema::table('fathers', function (Blueprint $table) {
            $table->timestamp('birth')->change();
        });

        Schema::table('father_occupations', function (Blueprint $table) {
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('father_passports', function (Blueprint $table) {
            $table->timestamp('issued')->change();
            $table->timestamp('expires')->change();
        });

        Schema::table('mothers', function (Blueprint $table) {
            $table->timestamp('birth')->change();
        });

        Schema::table('mother_occupations', function (Blueprint $table) {
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('mother_passports', function (Blueprint $table) {
            $table->timestamp('issued')->change();
            $table->timestamp('expires')->change();
        });

        Schema::table('siblings', function (Blueprint $table) {
            $table->timestamp('birth')->change();
        });

        Schema::table('sibling_occupations', function (Blueprint $table) {
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('sibling_passports', function (Blueprint $table) {
            $table->timestamp('issued')->change();
            $table->timestamp('expires')->change();
        });

        Schema::table('spouses', function (Blueprint $table) {
            $table->timestamp('birth')->change();
        });

        Schema::table('spouse_occupations', function (Blueprint $table) {
            $table->timestamp('from')->change();
            $table->timestamp('till')->change();
        });

        Schema::table('spouse_passports', function (Blueprint $table) {
            $table->timestamp('issued')->change();
            $table->timestamp('expires')->change();
        });
    }
};
