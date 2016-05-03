<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name');
            $table->string('business_phone')->unique();
            $table->string('business_address');
            $table->string('business_desc');
            $table->string('business_email');
            $table->string('business_type');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('notes');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendors');
    }
}
