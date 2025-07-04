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
        Schema::create('bus_lines', function (Blueprint $table) {
            $table->id();
            $table->string('line_number');     // e.g., "YBS 21"
            $table->string('name')->nullable(); // e.g., "Hledan to Sule"
            $table->string('color')->nullable(); // route color
            $table->string('operating_hours')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_lines');
    }
};
