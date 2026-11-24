<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asset_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('building')->nullable();
            $table->string('floor', 100)->nullable();
            $table->string('room', 100)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index('name', 'asset_locations_name_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asset_locations');
    }
};