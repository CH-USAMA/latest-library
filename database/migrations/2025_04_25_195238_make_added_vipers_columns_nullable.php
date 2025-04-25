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
        Schema::table('assignments', function (Blueprint $table) {
            $table->tinyInteger('vocabulary')->nullable()->after('feedback');
            $table->tinyInteger('inference')->nullable()->after('vocabulary');
            $table->tinyInteger('prediction')->nullable()->after('inference');
            $table->tinyInteger('explanation')->nullable()->after('prediction');
            $table->tinyInteger('retrieval')->nullable()->after('explanation');
            $table->tinyInteger('summarise')->nullable()->after('retrieval');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assignments', function (Blueprint $table) {
            //
        });
    }
};
