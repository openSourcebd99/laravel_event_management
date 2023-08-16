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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->unsignedBigInteger('event_category_id');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('event_category_id')->references('id')->on('event_categories')
                ->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('created_by')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
