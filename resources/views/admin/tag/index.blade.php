@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тэги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Информационная панель</a></li>
                            <li class="breadcrumb-item active">Тэги</li>
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
                    <div class="col-1 mb-3">
                        <a href="{{route('admin.tag.create')}}" class="btn btn-block btn-outline-dark">Добавить</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <ya-tr-span data-index="151-0" data-translated="true" data-source-lang="en"
                                                data-target-lang="ru" data-value="Responsive Hover Table"
                                                data-translation="Отзывчивая таблица наведения" data-ch="0"
                                                data-type="trSpan">Список категорий
                                    </ya-tr-span>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>
                                            <ya-tr-span data-index="152-0" data-translated="true" data-source-lang="en"
                                                        data-target-lang="ru" data-value="ID" data-translation="ID"
                                                        data-ch="0" data-type="trSpan">ID
                                            </ya-tr-span>
                                        </th>
                                        <th>
                                            <ya-tr-span data-index="153-0" data-translated="true" data-source-lang="en"
                                                        data-target-lang="ru" data-value="User"
                                                        data-translation="Пользователь" data-ch="0" data-type="trSpan">
                                                Название
                                            </ya-tr-span>
                                        </th>
                                        <th colspan="3">
                                            <ya-tr-span data-index="153-0" data-translated="true" data-source-lang="en"
                                                        data-target-lang="ru" data-value="User"
                                                        data-translation="Пользователь" data-ch="0" data-type="trSpan">
                                                Действия
                                            </ya-tr-span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>
                                                <ya-tr-span data-index="157-0" data-translated="true"
                                                            data-source-lang="en" data-target-lang="ru" data-ch="0"
                                                            data-type="trSpan">{{$tag->title}}</ya-tr-span>
                                            </td>
                                            <td><a href="{{route('admin.tag.show', $tag->id)}}"><i
                                                        class="fa fa-eye"></i></a></td>
                                            <td><a href="{{route('admin.tag.edit', $tag->id)}}">Изменить</a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent"><i class="fa fa-trash text-danger" role="button"></i></button>
                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach
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
