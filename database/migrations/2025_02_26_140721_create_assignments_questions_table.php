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
        Schema::create('assignments_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('assignment_id')->nullable()->unsigned();
            $table->foreign('assignment_id')->references('id')->on(table: 'assignments')->onDelete('cascade');
            $table->bigInteger('question_id')->nullable()->unsigned();
            $table->foreign('question_id')->references('id')->on(table: 'questions')->onDelete('cascade');
            $table->TEXT(column: 'answer_field')->nullable();
            $table->TEXT(column: 'feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments_questions');
    }
};
