@extends('layouts.master')

@section('css')

@endsection

@section('breadcrumb')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">

            <h3 class="page-title"><bold>Welcome, {{ Auth::user()->name }}!</bold></h3>
        </div>
    </div>
</div>     
<!-- end page title --> 
@endsection

@section('content')
<div class="row">
    <div class="col-md-3" >
        <div class="card-box" style="height: 120px;">
{{--            <p>This is dashboard placeholder</p>--}}
        </div>
    </div>
    <div class="col-md-3" >
        <div class="card-box" style="height: 120px;">

        </div>
    </div>
    <div class="col-md-3" >
        <div class="card-box" style="height: 120px;">

        </div>
    </div>
    <div class="col-md-3">
        <div class="card-box" style="height: 120px;">

        </div>
    </div><!-- end col -->

</div>
<div class="row">
    <div class="col-md">
        <div class="card-box" style="height: 200px;">
            <img class="maincardbody-logo" src="{{asset('assets/images/Logo-c.png')}}">
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection