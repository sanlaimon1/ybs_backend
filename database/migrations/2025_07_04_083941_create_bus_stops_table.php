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
        Schema::create('bus_stops', function (Blueprint $table) {
            $table->id();
            $table->string('name');        // e.g., "Hledan Junction"
            $table->decimal('lat', 10, 7); // GPS latitude
            $table->decimal('lng', 10, 7); // GPS longitude
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_stops');
    }
};
