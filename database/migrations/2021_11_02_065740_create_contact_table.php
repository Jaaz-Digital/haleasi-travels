<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 15);
            $table->string('destination');
            $table->string('duration');
            $table->string('description');
            $table->timestamps();
            
            //UTM Source Data
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_content')->nullable();
            $table->string('utm_term')->nullable();
            $table->string('utm_initial_referrer')->nullable();
            $table->string('utm_last_referrer')->nullable();
            $table->string('utm_landing_page')->nullable();
            $table->string('utm_visite')->nullable();
            $table->string('browsername')->nullable();
            $table->string('browserversion')->nullable();
            $table->string('browserplatform')->nullable();
            $table->string('ip_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
