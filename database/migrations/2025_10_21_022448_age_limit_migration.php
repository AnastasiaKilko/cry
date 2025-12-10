<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('age_limits', function (Blueprint $table) {
            $table->id();
            $table->enum('age_limit_type', ['0+', '6+', '12+', '16+', '18+']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('age_limits');
    }
};
