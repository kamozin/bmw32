@extends('app_page')



@section('content')

    <section class="right-block" >
        <section class="contents">

            <h2 class="zagolovok">{{$page->title}}</h2>

                {!! $page->text !!}
        </section>
    </section>



    @stop