@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Категории</div>

                    <div class="panel-body">
                        <a href="/home/lessons/store" class="btn btn-primary">Добавить предмет</a>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span>
                            </button>
                            <strong>{{session()->get('success')}}</strong>
                        </div>
                    @endif
                    <div class="panel-body">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                               cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>№ п/п</th>
                                <th>Наименование курса</th>
                                <th>Родительский курс</th>
                                <th>описание</th>

                                <th>Редактировать</th>
                                <th>Удалить</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($lessons as $l)

                                <td>{{$l->id}}</td>
                                <td>
                                    {{$l->title_url}}
                                </td>

                                <td>
                                    @if($l->parent_id==0)
                                        Категория родитель
                                    @else
                                        @foreach($lessons as $les)

                                            @if($l->parent_id==$les->id)
                                                {{$les->title_url}}

                                            @endif
                                        @endforeach

                                    @endif
                                </td>
                                <td>


                                        @foreach($description as $d)

                                            @if($d['id_lessons']==$l->id)
                                                <a href="/home/lessons/description/edit/{{$l->id}}">Редактировать
                                                    описание</a>
                                            @else

                                            @endif

                                        @endforeach

                                </td>

                                <td><a href="/home/lessons/edit/{{$l->id}}">Редактировать</a></td>
                                <td><a href="/home/lessons/destroy/{{$l->id}}">Удалить</a></td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('header')

    <link href="/includes/admin/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

@stop
@section('footer')
    <script src="/includes/admin/js/datatables/jquery.dataTables.min.js"></script>
    <script>

        $('#datatable-responsive').DataTable({

            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Russian.json"
            }
        });
    </script>
@stop