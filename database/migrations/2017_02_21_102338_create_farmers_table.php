<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state');
            $table->string('lga');
            $table->string('ward');
            $table->string('village');
            $table->string('bvn');
            $table->enum('gender', ['M', 'F']);
            $table->string('dob');
            $table->string('contact_add');
            $table->string('highest_education_lvl');
            $table->enum('comp_literate', ['Y', 'N']);
            $table->enum('need_training', ['Y', 'N']);
            $table->string('next_of_kin');
            $table->string('relationship');
            $table->string('id_next_of_kin');
            $table->string('corporate_name');
            $table->string('rc_no');
            $table->string('reg_date');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('account_type');
            $table->string('farmer_category');
            $table->string('farm_size')->nullable();
            $table->enum('ownership', ['Personal', 'Rented'])->nullable();
            $table->enum('land_reg', ['Y', 'N'])->nullable();
            $table->string('land_reg_date')->nullable();
            $table->string('land_reg_num')->nullable();
            $table->string('reg_authority')->nullable();
            $table->string('organisation');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('altitude');
            $table->string('id_presented_path');
            $table->string('id_number');
            $table->string('crop_packages')->nullable();
            $table->string('non_crop_packages')->nullable();
            $table->string('farmer_scan_path');
            $table->string('factory_location')->nullable();
            $table->string('product_type')->nullable();
            $table->string('mode_of_storage')->nullable();
            $table->string('area_of_coverage')->nullable();
            $table->string('mode_of_registration')->nullable();
            $table->string('input_types')->nullable();
            $table->string('mode_of_transporation')->nullable();
            $table->string('equipment')->nullable();
            $table->string('area_of_operation')->nullable();
            //cooperative info
            $table->string('cooperative_name')->nullable();
            $table->string('status')->nullable();
            $table->string('coop_reg_number')->nullable();
            $table->string('cooperative_reg_date')->nullable();
            $table->string('agency')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('cooperative_address')->nullable();
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
        Schema::dropIfExists('farmers');
    }
}
