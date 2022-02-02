<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Payments extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'expired_date', 'cardnumber', 'cvv'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'expired_date', 'cardnumber', 'cvv',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $table = 'payments';

}
