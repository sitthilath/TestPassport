<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     
   
    
    protected $fillable = [
        'name', 'email', 'password',

        'budget_company',
        'previous',
        'status',
        'card_number_employee',
        'name',
        'surname',
        'position_id',
        'start_date',
        'levelemployee_id',
        'report_to',

        'line_report',
        'institution_id',
        'department_id',
        'stationed_id',
        'area_id',
        'date_of_birth',
        'tel',
        'history_working',
        'edu_background',
        'company_guarantee',
        'village_id',
        'district_id',
        'province_id',
        'census',
        'penalty_notification',
        'certificate_residence',
        'certificate_medical_checkup',
    
        'quick_contact_information',
        'basic_salary',
        'eating_rate',
        'bonus',
        'phone_value',

        'annual_holiday',
        'appraisal_salary',
        'petrol_cost',
        'depreciation',
        'diligent_money',
        'accommodation_fee',
        'probation',
        'account_number',
        'annotation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function area()
    {
        return $this->belongsTo('App\Model\Area\Area');
    }

    public function department()
    {
        return $this->belongsTo('App\Model\Department\Department');
    }

    public function district()
    {
        return $this->belongsTo('App\Model\District\District');
    }

    public function institution()
    {
        return $this->belongsTo('App\Model\Institution\Institution');
    }

    public function levelemployee()
    {
        return $this->belongsTo('App\Model\LevelEmployee\LevelEmployee');
    }

    public function position()
    {
        return $this->belongsTo('App\Model\Position\Position');
    }

    public function province()
    {
        return $this->belongsTo('App\Model\Province\Province');
    }

    public function stationed()
    {
        return $this->belongsTo('App\Model\Stationed\Stationed');

    }

    public function village()
    {
        return $this->belongsTo('App\Model\Village\Village');
    }
}
