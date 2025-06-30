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
        Schema::create('council_financial_year', function (Blueprint $table) {
            $table->foreignId('council_id')->constrained()->cascadeOnDelete();
            $table->foreignId('financial_year_id')->constrained('financial_years');
            $table->boolean('is_default')->default(false);

            $table->primary(['council_id', 'financial_year_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('council_financial_year');
    }
};
