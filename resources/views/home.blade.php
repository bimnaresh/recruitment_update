@extends('index')


@section('content')
<div id="page-wrapper">
    @if (Session::has('message'))
    @if(Auth::user()->status!=1)
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
    @else
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    @endif
    <!-- /.row -->
    <!-- /.row -->
</div>
@endsection
