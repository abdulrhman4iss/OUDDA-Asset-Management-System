<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asset_history', function (Blueprint $table) {
            $table->id();

            $table->foreignId('asset_id')
                ->constrained('assets');

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('event_type', 100);
            $table->text('description')->nullable();

            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();

            $table->dateTime('event_at');

            $table->timestamps();

            $table->index('event_type', 'asset_history_event_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asset_history');
    }
};