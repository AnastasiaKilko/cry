<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shopping_bag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_authorship');
            $table->foreignId('id_users');
            $table->unsignedMediumInteger('amount');
            $table->unsignedMediumInteger('amount_price');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shopping_bag');
    }
};
