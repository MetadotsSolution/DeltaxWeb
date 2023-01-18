<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_accounts', function (Blueprint $table) {
            $table->id();
            
            $table->string('fname');
            $table->string('surname');
            $table->string('email');
            $table->string('gender');
            $table->string('status');
            $table->string('resident_address');
            $table->string('nin');
            $table->string('stin');
            $table->string('business_type');
            $table->string('business_address');
            $table->string('password');
            $table->string('tax_id');
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
        Schema::dropIfExists('individual_accounts');
    }
};
