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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('icon')->default('box');
            $table->integer('total_stock')->default(0);
            $table->integer('available_stock')->default(0);
            $table->integer('min_stock_alert')->default(5);
            $table->string('unit')->default('Unit');
            $table->string('location')->default('Lab Utama');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->string('borrowing_code')->unique();
            $table->foreignId('inventory_id')->constrained()->cascadeOnDelete();
            $table->string('borrower_name');
            $table->string('borrower_class')->default('X1-RPL');
            $table->string('borrower_role')->default('Siswa');
            $table->date('borrow_date');
            $table->date('return_date')->nullable();
            $table->integer('duration_hours')->default(2);
            $table->integer('quantity')->default(1);
            $table->text('purpose');
            $table->boolean('is_outside_class_hours')->default(false);
            $table->enum('status', ['menunggu', 'disetujui', 'ditolak', 'dipakai', 'selesai'])->default('menunggu');
            $table->string('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('returned_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('activity_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('status_badge')->default('Menunggu');
            $table->string('badge_variant')->default('warning');
            $table->string('time_ago')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_notifications');
        Schema::dropIfExists('borrowings');
        Schema::dropIfExists('inventories');
        Schema::dropIfExists('categories');
    }
};
