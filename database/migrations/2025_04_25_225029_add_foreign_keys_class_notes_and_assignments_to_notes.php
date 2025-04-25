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
        Schema::table('notes', function (Blueprint $table) {
            $table->bigInteger('class_notes_id')->nullable()->unsigned();
            $table->foreign('class_notes_id')->references('id')->on(table: 'class_notes')->onDelete('cascade');
            $table->bigInteger('assignment_id')->nullable()->unsigned();
            $table->foreign('assignment_id')->references('id')->on(table: 'assignments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notes', function (Blueprint $table) {
            //
        });
    }
};
