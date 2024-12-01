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
        Schema::create('_feedbacks', function (Blueprint $table) {
            $table->id();
            $table->foreign('Customer_ID',50)->references('id')->on('users')->onDelete('cascade');
            $table->string('Feedback_Text',50);
            $table->in('Rating',50);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_feedbacks');
    }
};
