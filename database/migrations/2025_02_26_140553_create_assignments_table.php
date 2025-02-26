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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name')->nullable();
            $table->bigInteger('book_id')->nullable()->unsigned();
            $table->foreign('book_id')->references('id')->on(table: 'books')->onDelete('cascade');
            $table->bigInteger('student_id')->nullable()->unsigned();
            $table->foreign('student_id')->references('id')->on(table: 'users')->onDelete('cascade');
            $table->bigInteger('teacher_id')->nullable()->unsigned();
            $table->foreign('teacher_id')->references('id')->on(table: 'users')->onDelete('cascade');
            $table->boolean(column: 'status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
