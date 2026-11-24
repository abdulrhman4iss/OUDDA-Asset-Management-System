<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('borrowing_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('asset_id')
                ->constrained('assets');

            $table->foreignId('user_id')
                ->constrained('users');

            $table->foreignId('approved_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->dateTime('request_date');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('due_date');

            $table->text('purpose')->nullable();

            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
                'cancelled',
            ])->default('pending');

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index('status', 'borrowing_requests_status_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrowing_requests');
    }
};