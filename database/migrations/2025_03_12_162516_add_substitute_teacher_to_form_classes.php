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
        Schema::table('form_classes', function (Blueprint $table) {
            $table->bigInteger('substitute_teacher_id')->after('teacher_id')->nullable()->unsigned();
            $table->foreign('substitute_teacher_id')->references('id')->on(table: 'users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('form_classes', function (Blueprint $table) {
            //
        });
    }
};
