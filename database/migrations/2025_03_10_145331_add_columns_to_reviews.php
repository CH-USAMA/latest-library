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
        Schema::table('reviews', function (Blueprint $table) {
            $table->bigInteger('book_id')->nullable()->unsigned();
            $table->foreign('book_id')->references('id')->on(table: 'books')->onDelete('cascade');
            $table->bigInteger('student_id')->nullable()->unsigned();
            $table->foreign('student_id')->references('id')->on(table: 'users')->onDelete('cascade');
            $table->integer(column: 'rating')->nullable();
            $table->TEXT(column: 'comment_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            //
        });
    }
};
