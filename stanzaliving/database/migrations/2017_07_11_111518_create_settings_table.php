<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitename');
            $table->string('displayemail');
            $table->string('sendemail');
            $table->string('reveiveon');
            $table->string('phone');
            $table->string('metatitle');
            $table->string('metadesc');
            $table->string('metakeywords');
            $table->string('copyright');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
