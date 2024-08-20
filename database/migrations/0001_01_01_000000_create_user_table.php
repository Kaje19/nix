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
        Schema::create('client', function (Blueprint $table) {
            $table->integer('client_id',true)->primary();
            $table->string('client_fname',20);
            $table->string('client_lname',20);
            $table->bigInteger('client_contact');
            $table->string('client_email',30);
            $table->integer('booking_id');
            $table->integer('package_id');
            $table->integer('review_id');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('coordinator', function (Blueprint $table) {
            $table->integer('coor_id',true)->primary();
            $table->string('coor_username',20);
            $table->string('coor_pass',20);
            $table->string('coor_email',30);
            $table->string('coor_fname',20);
            $table->string('coor_lname',20);
            $table->date('coor_birthday');
            $table->string('gender',6);
            $table->bigInteger('coor_contact');
            $table->string('coor_city',20);
            $table->integer('review_id');
            $table->integer('package_id');
            $table->integer('booking_id');
            $table->timestamp('acc_created')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
        Schema::dropIfExists('coordinator');
    }
};
