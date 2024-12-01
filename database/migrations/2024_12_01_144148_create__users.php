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
        Schema::create('_users', function (Blueprint $table) {
            $table->id();
            $table->string('Name',50);
            $table->string('email',50)->unique();
            $table->string('password',8);
            $table->string('Phone_number',50);
            $table->string('image')->nullable();
            $table->enum('role', ['easy', 'hard']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_users');
    }
};
