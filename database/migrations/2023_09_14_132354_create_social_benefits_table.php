<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('social_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 100);
            $table->string('type', 100);
            $table->string('amount', 100);
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_benefits');
    }
};
