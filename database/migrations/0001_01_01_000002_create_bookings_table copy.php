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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->integer('boking_id',true)->primary();
            $table->string('category',30);
            $table->string('location',50);
            $table->date('event_date');
            $table->time('event_time');
            $table->string('notes',100);
            $table->string('status',10);
            $table->integer('client_id');
            $table->integer('package_id');
            $table->timestamp('created_at');
        });

        Schema::create('event_preferences', function (Blueprint $table) {
            $table->integer('preferences_id',true)->primary();
            $table->string('event_type',20);
            $table->string('theme',20);
            $table->decimal('budget_range',6,2);
            $table->integer('guest_count');
            $table->integer('event_id');
            $table->integer('client_id');
            $table->timestamp('created_at');
        });

        Schema::create('recommendation', function (Blueprint $table) {
            $table->integer('reco_id',true)->primary();
            $table->integer('client_id');
            $table->integer('event_id');
            $table->integer('package_id');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
        Schema::dropIfExists('event_preferences');
        Schema::dropIfExists('recommendations');
    }
};
