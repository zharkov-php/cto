@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="form-horizontal" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="{{ route('services.store') }}">
           @csrf
               @method('POST')
            <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Добавляем услугу</h3>

                        @include('admin.errors')

                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail">Название услуги</label>
                                <input type="text" class="form-control" id="exampleInputEmail"  name="name" >
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Краткое описание услуги</label>
                                <textarea name="title" id="exampleInputEmail1" cols="30" rows="10" class="form-control" ></textarea>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-default">Назад</button>
                        <button class="btn btn-success pull-right">Добавить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection