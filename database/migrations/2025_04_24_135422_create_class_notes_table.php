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
        Schema::create('class_notes', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title')->nullable();
            $table->date(column: 'date')->nullable();
            $table->string(column: 'content')->nullable();
            $table->bigInteger('teacher_id')->nullable()->unsigned();
            $table->foreign('teacher_id')->references('id')->on(table: 'users')->onDelete('cascade');
            $table->bigInteger('form_class_id')->nullable()->unsigned();
            $table->foreign('form_class_id')->references('id')->on(table: 'form_classes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_notes');
    }
};
