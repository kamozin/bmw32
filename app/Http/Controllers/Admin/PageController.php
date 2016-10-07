<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

//        dd($request->all());
        $page=new Page();

        $page->title=$request->title_page;

        if(empty($request->url)){

            $page->url=TranslitController::str2url($request->title_page);

        }else{

            $page->url=$request->url;
        }

        $page->title_meta=$request->title_meta;

        $page->keywords=$request->keywords;

        $page->description=$request->description;

        $page->text=$request->text_page;
        $page->block_id=$request->block_id;
        $page->parent_id=0;

        $page->save();
        return redirect()->back();




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       return view('admin.page.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $page=Page::all();


        return view('admin.page.show', ['page'=>$page]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page=Page::find($id);

        return view('admin.page.edit',['page'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

                $page=Page::find($request->id);

//        dd($page);
        $page->title=$request->title_page;

        if(empty($request->url)){

            $page->url=TranslitController::str2url($request->title_page);

        }else{

            $page->url=$request->url;
        }

        $page->title_meta=$request->title_meta;

        $page->keywords=$request->keywords;

        $page->description=$request->description;

        $page->text=$request->text_page;
        $page->block_id=$request->block_id;
        $page->parent_id=0;

        $page->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
