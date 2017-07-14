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
    @include('layouts.dashboard.content')
@endsection


@section('footer')
    @include('layouts.dashboard.footer')
@endsection
