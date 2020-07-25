<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
          
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
                
            
            $table->string('budget_company');
            $table->string('previous');
            $table->string('status');
            $table->string('card_number_employee');
            $table->string('name');
            $table->string('surname');
            $table->bigInteger('position_id')->unsigned();
            $table->date('start_date');
            $table->bigInteger('levelemployee_id')->unsigned();
            $table->string('report_to');
            $table->string('line_report');
            $table->bigInteger('institution_id')->unsigned();
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('stationed_id')->unsigned();
            $table->bigInteger('area_id')->unsigned();
            $table->date('date_of_birth');
            $table->string('tel');
            $table->string('history_working');
            $table->string('edu_background');
            $table->string('company_guarantee');
            $table->bigInteger('village_id')->unsigned();
            $table->bigInteger('district_id')->unsigned();
            $table->bigInteger('province_id')->unsigned();
            $table->string('census');
            $table->string('penalty_notification');
            $table->string('certificate_residence');
            $table->string('certificate_medical_checkup');
            
            $table->string('quick_contact_information');
            $table->string('basic_salary');
            
            $table->string('eating_rate');
            $table->string('bonus');
            $table->string('phone_value');
            $table->string('annual_holiday');
            $table->string('appraisal_salary');
            $table->string('petrol_cost');
            $table->string('depreciation');
            $table->string('diligent_money');
            $table->string('accommodation_fee');
            $table->string('probation');
            $table->string('account_number');
            $table->string('annotation');
            
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->foreign('levelemployee_id')->references('id')->on('level_employees')->onDelete('cascade');
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('stationed_id')->references('id')->on('stationeds')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            

       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
