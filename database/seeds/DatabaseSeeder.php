<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('level_employees')->insert([
            'levelemployee' => 'gg',
        ]);

        DB::table('institutions')->insert([
            'institution_name' => 'gg',
        ]);

        DB::table('departments')->insert([
            'department_name' => 'gg',
        ]);

        DB::table('positions')->insert([
            'position_name' => 'gg',
        ]);

        DB::table('stationeds')->insert([
            'stationed_name' => 'gg',
        ]);

        DB::table('areas')->insert([
            'area_name' => 'gg',
        ]);

        // DB::table('provinces')->insert([
           
        //       'pr_name' => 'ແຂວງ ນະຄອນຫລວງວຽງຈັນ','pr_name_en' => 'Vientiane capital','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //    'pr_name' => 'ແຂວງ ຜົ້ງສາລີ','pr_name_en' => 'Phongsali','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ຫລວງນ້ຳທາ','pr_name_en' => 'Louang Namtha','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ອຸດົມໄຊ','pr_name_en' => 'Oudomxai','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //    'pr_name' => 'ແຂວງ ບໍ່ແກ້ວ','pr_name_en' => 'Bokeo','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ຫຼວງພະບາງ','pr_name_en' => 'Louang Phabang','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //    'pr_name' => 'ແຂວງ ຫົວພັນ','pr_name_en' => 'Houaphan','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //    'pr_name' => 'ແຂວງ ໄຊຍະບູລີ','pr_name_en' => 'Xaignabouli','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ຊຽງຂວາງ','pr_name_en' => 'Xiangkhoang','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ວຽງຈັນ','pr_name_en' => 'Vientiane','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //    'pr_name' => 'ແຂວງ ບໍລິຄຳໄຊ','pr_name_en' => 'Boli khamxai','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ຄຳມ່ວນ','pr_name_en' => 'Khammouan','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ສະຫວັນນະເຂດ','pr_name_en' => 'Savannakhet','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ສາລະວັນ','pr_name_en' => 'Salavan','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ເຊກອງ','pr_name_en' => 'Xekong','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ຈຳປາສັກ','pr_name_en' => 'Champasak','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //     'pr_name' => 'ແຂວງ ອັດຕະປື','pr_name_en' => 'Attapu','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17',
        //     //    'pr_name' => 'ແຂວງ ໄຊສົມບູນ','pr_name_en' => 'Sisomboun','created_at' => '2020-07-16 12:44:17','updated_at' => '2020-07-16 12:44:17'
              
              
        // ]);

        // DB::table('districts')->insert([
        //     'dr_name' => 'ເມືອງ ຈັນທະບູລີ','dr_name_en' => 'Chanthabuly','pr_id' => '1','created_at' => '2020-07-16 12:43:28','updated_at' => '2020-07-16 12:43:28'
        // ]);
        // DB::table('villages')->insert([
        //     'vill_name' => 'ບ້ານ ໜອງປິງ','vill_name_en' => 'Nongping','dr_id' => '101','created_at' => '2020-07-16 12:44:52','updated_at' => '2020-07-16 12:44:52'
        // ]);

         DB::table('users')->insert([
             'email' => 'bbbbb@gmail.com','email_verified_at' => NULL,'password' => 'bbbbb','budget_company' => 'b','previous' => 'b','status' => 'b','card_number_employee' => 'b','name' => 'b','surname'=>'bbbb','position_id' => '1','start_date' => '2020-06-26','levelemployee_id' => '1','report_to' => 'b','line_report' => 'b','institution_id' => '1','department_id' => '1','stationed_id' => '1','area_id' => '1','date_of_birth' => '2020-06-26','tel' => 'b','history_working' => 'b','edu_background' => 'b','company_guarantee' => 'b','village_id' => '10101','district_id' => '101','province_id' => '1','census' => 'b','penalty_notification' => 'b','certificate_residence' => 'b','certificate_medical_checkup' => 'b','quick_contact_information' => 'b','basic_salary' => 'b','eating_rate' => 'b','bonus' => 'b','phone_value' => 'b','annual_holiday' => 'b','appraisal_salary' => 'b','petrol_cost' => 'b','depreciation' => 'b','diligent_money' => 'b','accommodation_fee' => 'b','probation' => 'b','account_number' => 'b','annotation' => 'b','remember_token' => NULL,'created_at' => '2020-07-16 15:54:53','updated_at' => '2020-07-16 15:54:53'
         ]);
    }
}
