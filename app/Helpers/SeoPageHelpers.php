<?php
namespace App\Helpers;

use DB;

class SeoPageHelpers
{

    public static function GetTitle($id)
    {


        $seo=DB::table('pages')->where('id', $id)->first();


        return $seo->title_meta;
    }

    public static function GetKeywords($id){

        $seo=DB::table('pages')->where('id', $id)->first();


        return $seo->keywords;
    }
    public static function GetDescription($id){

        $seo=DB::table('pages')->where('id', $id)->first();
        return $seo->description;
    }
}