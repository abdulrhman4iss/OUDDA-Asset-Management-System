<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asset_inspections', function (Blueprint $table) {
            $table->id();

            $table->foreignId('asset_id')
                ->constrained('assets');

            $table->foreignId('inspected_by')
                ->constrained('users');

            $table->foreignId('borrowing_record_id')
                ->nullable()
                ->constrained('borrowing_records')
                ->nullOnDelete();

            $table->enum('inspection_type', [
                'checkout',
                'return',
                'routine',
                'damage',
            ]);

            $table->enum('condition_status', [
                'excellent',
                'good',
                'fair',
                'poor',
                'damaged',
            ]);

            $table->text('notes')->nullable();
            $table->dateTime('inspected_at');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asset_inspections');
    }
};