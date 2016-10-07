<?php
namespace App\Helpers;

use DB;
class NavigationHelper
{

    public static function GetLeftNav()
    {


        $nav='';

        $page=DB::table('pages')->where('block_id', 1)->get();


        foreach ($page as $p) {



        $nav.='<li><a href="'.$p->url.'">'.$p->title.'</a></li>';
        }

        return $nav;
    }

//    public static function GetTopNav()
//    {
//        //  что-то
//        return $img;
//    }
}