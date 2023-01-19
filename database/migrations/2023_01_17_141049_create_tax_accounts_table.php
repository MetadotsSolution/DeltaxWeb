<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('acc_type')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('status')->nullable();
            $table->string('resident_address')->nullable();
            $table->string('nin')->nullable();
            $table->string('stin')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_address')->nullable();
            $table->string('cac_no')->nullable();
            $table->string('reg_date')->nullable();
            $table->string('business_ownership')->nullable();
            $table->string('no_of_paye')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('corporate_name')->nullable();
            $table->string('company_address')->nullable();
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
        Schema::dropIfExists('tax_accounts');
    }
};
