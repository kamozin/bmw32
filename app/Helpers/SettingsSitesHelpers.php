<?php
namespace App\Helpers;

use DB;

class SettingsSitesHelpers
{

    public static function GetEmail()
    {

        $email=DB::table('settings')->value('email')->first();

        return $email;
    }

    public static function GetPhoneSov(){

        $phone=DB::table('settings')->value('phone_sov');


        return $phone;
    }
    public static function GetPhoneBej(){

        $phone=DB::table('settings')->value('phone_bej');
        return $phone;
    }
}