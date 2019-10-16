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
            <img class="maincardbody-logo" src="{{asset('assets/images/logo-c.png')}}">
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Brands</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]" data-plugin="multiselect">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option selected>Philadelphia Eagles</option>
                                                <option selected>Washington Redskins</option>
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                                <option selected>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection