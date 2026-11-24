<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('borrowing_records', function (Blueprint $table) {
            $table->id();

            $table->foreignId('request_id')
                ->unique()
                ->constrained('borrowing_requests');

            $table->foreignId('asset_id')
                ->constrained('assets');

            $table->foreignId('borrower_id')
                ->constrained('users');

            $table->foreignId('issued_by')
                ->constrained('users');

            $table->foreignId('received_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->dateTime('borrowed_at');
            $table->dateTime('due_at');
            $table->dateTime('returned_at')->nullable();

            $table->text('checkout_condition')->nullable();
            $table->text('return_condition')->nullable();

            $table->enum('status', [
                'active',
                'returned',
                'overdue',
            ])->default('active');

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index('status', 'borrowing_records_status_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrowing_records');
    }
};