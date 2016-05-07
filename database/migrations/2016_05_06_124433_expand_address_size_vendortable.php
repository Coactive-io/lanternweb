<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExpandAddressSizeVendortable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function ($table) {
            $table->string('business_phone')->nullable()->change();
            $table->string('business_address', 1000)->nullable()->change();
            $table->string('business_desc')->nullable()->change();
            $table->string('business_email')->nullable()->change();
            $table->string('business_type')->nullable()->change();
            $table->string('notes', 5000)->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
