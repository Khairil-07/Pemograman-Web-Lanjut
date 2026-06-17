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
    Schema::create('campaign_accounts', function (Blueprint $table) {
        $table->id();
        // foreignId memastikan relasi One to One secara teknis di DB
        $table->foreignId('campaign_id')->unique()->constrained()->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_accounts');
    }
};
