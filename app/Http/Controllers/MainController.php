<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class MainController extends Controller
{


    public  function index(){



        $page=DB::table('pages')->where('url', '/')->first();

        $id=$page->id;



        return view('main', ['page'=>$page, 'id'=>$id]);

    }

}
