@extends('layouts.dashboard.dashboard')

@section('title')
    Dashboard
@endsection

@section('Header')
    @include('layouts.dashboard.main-header')
@endsection

@section('SideBar')
    @include('layouts.dashboard.main-sidebar')
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                My urls
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">urls</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive ">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>ID</th>
                                <th>site</th>
                                <th>Date</th>
                                <th>url shortener</th>
                                <th>status</th>
                                <th>Visited</th>
                                <th>share on</th>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/home">{{route('home')}}</a></td>
                                <td>11-7-2014</td>
                                <td><a href="/home">{{route('home')}}</a></td>
                                <td><span class="label label-success">Approved</span></td>
                                <td>11</td>
                                <td><a class="label label-danger" href="">facebook</a><a class="label label-success" href="">twitter</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Create new Url</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body ">
                    <form action="{{route('store_url')}}" method="POST" role="form" class="">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="url">
                            <span class="input-group-btn">
                              <button type="submit" class="btn bg-navy btn-flat ">Add</button>
                            </span>
                       </div>
                    </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection


@section('footer')
    @include('layouts.dashboard.footer')
@endsection
