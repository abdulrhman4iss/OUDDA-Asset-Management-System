<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->constrained('asset_categories');

            $table->foreignId('location_id')
                ->nullable()
                ->constrained('asset_locations')
                ->nullOnDelete();

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('asset_tag', 100)->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('serial_number')->nullable()->unique();
            $table->string('model')->nullable();
            $table->string('manufacturer')->nullable();
            $table->date('purchase_date')->nullable();
            $table->decimal('purchase_cost', 12, 2)->nullable();

            $table->enum('status', [
                'available',
                'borrowed',
                'maintenance',
                'damaged',
                'retired',
            ])->default('available');

            $table->enum('condition_status', [
                'excellent',
                'good',
                'fair',
                'poor',
                'damaged',
            ])->default('good');

            $table->string('qr_code')->nullable()->unique();

            $table->timestamps();

            $table->index('status', 'assets_status_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};