<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected  $tabla='settings';
    protected $fillable = [
        'email', 'phone_sov', 'phone_bej',
    ];


}
