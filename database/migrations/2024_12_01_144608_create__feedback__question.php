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
        Schema::create('_feedback__question', function (Blueprint $table) {
            $table->id();
            
            $table->foreign('Feedback_id',50)->references('id')->on('feedbacks')->onDelete('cascade');
            $table->foreign('qustion_id',50)->references('id')->on('question')->onDelete('cascade');
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_feedback__question');
    }
};
