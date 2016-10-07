@extends('layouts.app')

@section('header')


@stop

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Добавить страницу</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @if (session()->has('error'))

                            <div class="alert alert-error alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                                <strong>{{session()->get('error')}}</strong>
                            </div>

                        @endif

                        <form id="demo-form2" enctype="multipart/form-data"  method="POST" action="/admin/page/create" class="form-horizontal form-label-left">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Наименование страницы <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" required="required" name="title_page" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Урл страницы <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="url" required="required" name="url" value="" class="form-control col-md-7 col-xs-8">
                                    </div>
                                    {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}

                                        {{--<div class="checkbox">--}}
                                            {{--<label class="">--}}
                                                {{--<div class="icheckbox_flat-green" style="position: relative;">--}}
                                                    {{--<input type="checkbox" value="1" id="generated_url" class="flat"  style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>--}}
                                                {{--</div> Сгенерировать УРЛ--}}
                                            {{--</label>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">Вывод страницы <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="block_id" class="form-control">
                                        <option>Выбирете блок</option>
                                        <option value="1">Левое меню</option>
                                        {{--<option value="2">Верхнее меню</option>--}}
                                        <option value="0">Не выводить</option>

                                    </select>
                                    </div>

                                </div>



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Описание страницы<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="description" required="required" name="description" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keywords">Ключевые слова страницы<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="keywords" required="required" name="keywords" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Заголовок страницы<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="title" required="required" name="title_meta" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message" class="control-label col-md-3 col-sm-3 col-xs-12">Текст
                                    страницы</label>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="message" class="form-control" name="text_page"></textarea>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="/admin" class="btn btn-primary">Отмена</a>
                                    <button type="submit" class="btn btn-success">Создать страницу</button>
                                </div>
                            </div>

                        </form>



                    </div>
                </div>
            </div>
        </div>

    </div>




@stop



@section('footer')
    <script src="//cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('message');
    </script>


@stop