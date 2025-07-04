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
        Schema::create('bus_line_stop', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_line_id')->constrained()->onDelete('cascade');
            $table->foreignId('bus_stop_id')->constrained()->onDelete('cascade');
            $table->integer('stop_order'); // the order in which the bus visits the stop
            $table->enum('direction', ['up', 'down'])->default('up');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_line_stop');
    }
};
