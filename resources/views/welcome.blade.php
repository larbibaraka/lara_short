@extends('layouts.app')

@section('title')
    user name
@endsection


@section('header')
    @include('layouts.home.header')
@endsection


@section('navbar')
    @include('layouts.home.navbar')
@endsection


@section('top10')
    @include('layouts.home.top10')
@endsection


@section('footer')
        @include('layouts.dashboard.footer')
@endsection