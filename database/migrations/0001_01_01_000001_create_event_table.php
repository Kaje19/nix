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
        Schema::create('event', function (Blueprint $table) {
            $table->integer('event_id',true)->primary();
            $table->string('event_name',20);
            $table->date('event_date');
            $table->decimal('budget',6,2);
            $table->integer('client_id');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('event_packages', function (Blueprint $table) {
            $table->integer('package_id',true)->primary();
            $table->string('package_name',20);
            $table->string('package_type',20);
            $table->string('description',250);
            $table->binary('photo');
            $table->decimal('price',6,2);
            $table->integer('guest');
            $table->integer('service_id');
            $table->integer('review_id');
            $table->integer('booking_id');
            $table->integer('coor_id');
            $table->integer('reco_id');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->integer('service_id',true)->primary();
            $table->string('inclusions',20);
            $table->integer('quantity');
            $table->integer('package_id');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('review', function (Blueprint $table) {
            $table->integer('review_id',true)->primary();
            $table->integer('rating');
            $table->string('comments',30);
            $table->integer('package_id');
            $table->integer('booking_id');
            $table->integer('client_id');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
        Schema::dropIfExists('event_packages');
        Schema::dropIfExists('services');
        Schema::dropIfExists('review');
    }
};
