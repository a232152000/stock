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
        Schema::create('channel_token_stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('channel_token_id');
            $table->integer('stock_id');
            $table->timestamps();

            $table->index('channel_token_id');
            $table->index('stock_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channel_token_stocks');
    }
};
