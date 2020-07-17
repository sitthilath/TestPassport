<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = "u_id";
    
    protected $fillable = [
        'name', 'email', 'password',

        'budget_company',
        'previous',
        'status',
        'card_num_emp',
        'name_surname',
        'pos_id',
        'start_date',
        'lev_id',
        'report_to',

        'line_report',
        'ins_id',
        'dep_id',
        'sta_id',
        'are_id',
        'date_of_birth',
        'tel',
        'history_working',
        'edu_background',
        'company_guarantee',
        'vill_id',
        'dr_id',
        'pr_id',
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
        'account_num',
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
        return $this->belongsTo('App\Area');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function institution()
    {
        return $this->belongsTo('App\Institution');
    }

    public function levelemployee()
    {
        return $this->belongsTo('App\LevelEmployee');
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    public function stationed()
    {
        return $this->belongsTo('App\Stationed');

    }

    public function village()
    {
        return $this->belongsTo('App\Village');
    }
}
