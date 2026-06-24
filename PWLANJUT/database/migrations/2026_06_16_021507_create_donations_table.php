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
        if (!Schema::hasTable('donations')) {
            Schema::create('donations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
                $table->string('donor_name');
                $table->decimal('amount', 12, 2);
                $table->text('message')->nullable();
                $table->timestamps();
            });
        } else {
            Schema::table('donations', function (Blueprint $table) {
                if (!Schema::hasColumn('donations', 'campaign_id')) {
                    $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
                }
                if (!Schema::hasColumn('donations', 'donor_name')) {
                    $table->string('donor_name');
                }
                if (!Schema::hasColumn('donations', 'amount')) {
                    $table->decimal('amount', 12, 2);
                }
                if (!Schema::hasColumn('donations', 'message')) {
                    $table->text('message')->nullable();
                }
                if (!Schema::hasColumn('donations', 'created_at')) {
                    $table->timestamps();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
