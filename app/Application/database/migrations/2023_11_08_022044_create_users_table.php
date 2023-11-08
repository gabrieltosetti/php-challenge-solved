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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('external_id')->unique()->nullable(false);
            $table->string('first_name', 20)->nullable(false);
            $table->string('last_name', 40)->nullable(false);
            $table->string('email', 90)->unique()->nullable(false);
            $table->string('document', 15)->unique()->nullable(false);
            $table->string('password', 20)->nullable(false);
            $table->decimal('balance')->nullable(false)->default(0);
            $table->string('type', 10)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
