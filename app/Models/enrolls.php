<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrolls extends Model
{
    use HasFactory;


    //use HasApiTokens;
    use HasFactory;
    // use HasProfilePhoto;
    // use Notifiable;
    //use TwoFactorAuthenticatable;
    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    // use Illuminate\Database\Eloquent\Factories\HasFactory;
    //use Illuminate\Foundation\Auth\enroll as enroll;
    // use Illuminate\Notifications\Notifiable;
    // use Laravel\Fortify\TwoFactorAuthenticatable;
    // use Laravel\Jetstream\HasProfilePhoto;
    // use Laravel\Sanctum\HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'bkash_number',
        'tranjection_id',
    ];

}

