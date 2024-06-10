<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int|mixed $status
 * @property int|mixed $is_rejected
 */
class Data extends Model
{
    use HasFactory;

   const NOTIFICATION_ARABIC = 1;
   const NOTIFICATION_ENGLISH = 2;

   const STATUS_UNDER_REVIEW = 0;
   const STATUS_REJECTED = 1;
   const STATUS_APPROVED = 2;

   const REQUEST_REJECTED = 1;

   const REQUEST_APPROVED = 0;

    protected $fillable = [
        'passport_image',
        'profile_image',
        'first_name',
        'last_name',
        'second_name',
        'middle_name',
        'birth_date',
        'birth_place',
        'gender',
        'nationality',
        'country',
        'passport_number',
        'passport_type',
        'passport_date',
        'passport_expire_date',
        'passport_issue_place',
        'mobile_number',
        'email',
        'emergency_contact_name',
        'emergency_contact_country',
        'emergency_contact_city',
        'emergency_contact_address',
        'emergency_contact_email',
        'emergency_contact_home_phone',
        'emergency_contact_mobile_phone',
        'emergency_contact_postal_code',
        'emergency_contact_postal_box',
        'profession',
        'currnet_job_title',
        'entry_type',
        'entry_port',
        'entry_date',
        'last_coming_date_to_egypt',
        'last_coming_country_from',
        'cause_of_visiting',
        'friend_address',
        'friend_phone',
        'number_of_visits',
        'security_problem',
        'last_reachToEgypt_image',
    ];
    protected $table = 'data';

    protected $casts = [
        'birth_date' => 'date',
        'passport_date' => 'date',
        'passport_expire_date' => 'date',
    ];

    public function getPassportAttribute()
    {
        return  asset('storage/' .$this->passport_image);
    }

    public function getProfileAttribute()
    {
        return asset('storage/' . $this->profile_image);
    }

    public function getReachImageAttribute()
    {
        return asset('storage/' . $this->last_reachToEgypt_image);
    }

}
