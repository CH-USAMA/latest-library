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
        Schema::create('form_classes_teacher', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('form_class_id')->nullable()->unsigned();
            $table->foreign('form_class_id')->references('id')->on(table: 'users')->onDelete('cascade');
            $table->bigInteger('teacher_id')->nullable()->unsigned();
            $table->foreign('teacher_id')->references('id')->on(table: 'users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_classes_teacher');
    }
};
