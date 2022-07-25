@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <h1 class="m-0">{{$tag->title}}</h1>
                    <a href="{{route('admin.tag.edit', $tag->id)}}" class="ml-2">Изменить</a>
                    <form action="{{route('admin.tag.delete', $tag->id)}}" method="POST" class="ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent text-danger"><i class="fa fa-trash text-danger" role="button"></i>Удалить</button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><ya-tr-span data-index="151-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Responsive Hover Table" data-translation="Отзывчивая таблица наведения" data-ch="0" data-type="trSpan">Список категорий</ya-tr-span></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><ya-tr-span data-index="157-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="John Doe" data-translation="Джон Доу" data-ch="0" data-type="trSpan">{{$tag->id}}</ya-tr-span></td>

                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td><ya-tr-span data-index="157-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="John Doe" data-translation="Джон Доу" data-ch="0" data-type="trSpan">{{$tag->title}}</ya-tr-span></td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>


         </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
