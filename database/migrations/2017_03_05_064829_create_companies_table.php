<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_name');
            $table->string('contact_designation');
            $table->string('contact_mode_of_id');
            $table->string('contact_id_no');
            $table->string('company_name');
            $table->string('date_of_incoporation');
            $table->string('rc_no');
            $table->string('tax_id_no');
            $table->text('office_address');
            $table->text('factory_address')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->string('date_business_commenced');
            $table->text('business_history');
            $table->string('current_business');
            $table->string('date_commenced');
            $table->string('present_authorized_share_capital');
            $table->string('present_paidup_share_capital');
            $table->string('private_sector_membership');
            $table->string('yr1_turn_over');
            $table->string('yr1_gross_profit');
            $table->string('yr1_profit_after_tax');
            $table->string('yr2_turn_over')->nullable();
            $table->string('yr2_gross_profit')->nullable();
            $table->string('yr2_profit_after_tax')->nullable();
            $table->string('yr3_turn_over')->nullable();
            $table->string('yr3_gross_profit')->nullable();
            $table->string('yr3_profit_after_tax')->nullable();
            $table->string('account_name');
            $table->string('account_number');
            $table->string('account_type');
            $table->string('sort_code');
            $table->boolean('business_plan')->nullable();
            $table->string('date_prepared')->nullable();
            $table->boolean('mobilization_of_funds')->nullable();
            $table->string('business_plan_path')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('companies');
    }
}
