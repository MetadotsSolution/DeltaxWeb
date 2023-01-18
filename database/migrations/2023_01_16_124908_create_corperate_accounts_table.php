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
        Schema::create('corperate_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('corporate_name');
            $table->string('company_address');
            $table->string('email');
            $table->string('company_phone');
            $table->string('cac_no');
            $table->string('reg_date');
            $table->string('stin');
            $table->string('business_ownership');
            $table->string('no_of_paye');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('state');
            $table->string('lga');
            $table->string('tax_id');
            $table->string('password');
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
        Schema::dropIfExists('corperate_accounts');
    }
};
