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
        if (!Schema::hasTable('campaign_category')) {
            Schema::create('campaign_category', function (Blueprint $table) {
                $table->id();
                $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
                $table->foreignId('category_id')->constrained()->onDelete('cascade');
                $table->timestamps();
            });
        } else {
            Schema::table('campaign_category', function (Blueprint $table) {
                if (!Schema::hasColumn('campaign_category', 'campaign_id')) {
                    $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
                }
                if (!Schema::hasColumn('campaign_category', 'category_id')) {
                    $table->foreignId('category_id')->constrained()->onDelete('cascade');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_category');
    }
};
