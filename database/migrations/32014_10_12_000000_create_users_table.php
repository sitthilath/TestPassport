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
            $table->bigIncrements('u_id');
          
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');


            
            $table->string('budget_company');
            $table->string('previous');
            $table->string('status');
            $table->string('card_num_emp');
            $table->string('name_surname');
            $table->bigInteger('pos_id')->unsigned();
            $table->date('start_date');
            $table->bigInteger('lev_id')->unsigned();
            $table->string('report_to');

            $table->string('line_report');
            $table->bigInteger('ins_id')->unsigned();
            $table->bigInteger('dep_id')->unsigned();
            $table->bigInteger('sta_id')->unsigned();
            $table->bigInteger('are_id')->unsigned();
            $table->date('date_of_birth');
            $table->string('tel');
            $table->string('history_working');
            $table->string('edu_background');
            $table->string('company_guarantee');
            $table->bigInteger('vill_id')->unsigned();
            $table->bigInteger('dr_id')->unsigned();
            $table->bigInteger('pr_id')->unsigned();
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
            $table->string('account_num');
            $table->string('annotation');
            
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('pos_id')->references('pos_id')->on('positions')->onDelete('cascade');
            $table->foreign('lev_id')->references('lev_id')->on('level_employees')->onDelete('cascade');
            $table->foreign('ins_id')->references('ins_id')->on('institutions')->onDelete('cascade');
            $table->foreign('dep_id')->references('dep_id')->on('departments')->onDelete('cascade');
            $table->foreign('sta_id')->references('sta_id')->on('stationeds')->onDelete('cascade');
            $table->foreign('are_id')->references('are_id')->on('areas')->onDelete('cascade');
            $table->foreign('vill_id')->references('vill_id')->on('villages')->onDelete('cascade');
            $table->foreign('dr_id')->references('dr_id')->on('districts')->onDelete('cascade');
            $table->foreign('pr_id')->references('pr_id')->on('provinces')->onDelete('cascade');
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
