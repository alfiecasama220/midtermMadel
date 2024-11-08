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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('account_title');
            // $table->unsignedBigInteger('adjustment_id')->nullable();
            // $table->unsignedBigInteger('trialBalance_id')->nullable();
            // $table->unsignedBigInteger('adjustedTrialBalance_id')->nullable();
            // $table->unsignedBigInteger('incomeStatement_id')->nullable();
            // $table->unsignedBigInteger('balanceSheet_id')->nullable();
            $table->timestamps();

            // $table->foreign('adjustment_id')->references('id')->on('adjustment')->onDelete('cascade');
            // $table->foreign('trialBalance_id')->references('id')->on('trial_balance')->onDelete('cascade');
            // $table->foreign('adjustedTrialBalance_id')->references('id')->on('adjusted_trial_balance')->onDelete('cascade');
            // $table->foreign('incomeStatement_id')->references('id')->on('income_statement')->onDelete('cascade');
            // $table->foreign('balanceSheet_id')->references('id')->on('balance_sheet')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
