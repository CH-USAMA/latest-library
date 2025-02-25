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
            $table->bigInteger('question_id')->nullable()->unsigned();
            $table->foreign('question_id')->references('id')->on(table: 'questions')->onDelete('cascade');
            $table->bigInteger('student_id')->nullable()->unsigned();
            $table->foreign('student_id')->references('id')->on(table: 'users')->onDelete('cascade');
            $table->string(column: 'answer_content')->nullable();
            $table->boolean(column: 'submitted')->nullable();
            $table->string(column: 'feedback')->nullable();
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
