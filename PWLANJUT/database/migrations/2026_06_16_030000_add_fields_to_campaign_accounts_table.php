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
        Schema::table('campaign_accounts', function (Blueprint $table) {
            if (!Schema::hasColumn('campaign_accounts', 'campaign_id')) {
                $table->foreignId('campaign_id')->unique()->constrained()->onDelete('cascade');
            }

            if (!Schema::hasColumn('campaign_accounts', 'bank_name')) {
                $table->string('bank_name')->nullable();
            }

            if (!Schema::hasColumn('campaign_accounts', 'account_number')) {
                $table->string('account_number')->nullable();
            }

            if (!Schema::hasColumn('campaign_accounts', 'account_holder')) {
                $table->string('account_holder')->nullable();
            }

            if (!Schema::hasColumn('campaign_accounts', 'created_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaign_accounts', function (Blueprint $table) {
            $table->dropColumn(['bank_name', 'account_number', 'account_holder']);
        });
    }
};
