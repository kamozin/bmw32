<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class PageController extends Controller
{
    public  function index(Request $request){

        $url=$request->page;

        $page=DB::table('pages')->where('url', $url)->first();

        $id=$page->id;

        return view('page', ['id'=>$id, 'page'=>$page]);

    }
}
