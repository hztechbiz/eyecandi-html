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
                                <div class="modal-dialog" >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Manage Your Brands</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]" size="30" data-plugin="multiselect">
                                                @foreach($brands as $brand)
                                                    <option>{{ $brand['BrandName'] }}</option>
                                                @endforeach
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
<script>
$(document).ready(function(){
    $('#myModal').modal('show');
    // $("#my_multi_select1").multiSelect();
    $('#my_multi_select1').multiSelect({
        selectableHeader: "<label>Available Brands</label><input type='text' class='search-input' autocomplete='off' placeholder='Search'>",
        selectionHeader: "<label>My Brands</label><input type='text' class='search-input' autocomplete='off' placeholder='Search'>",
        afterInit: function(ms){
            var that = this,
                $selectableSearch = that.$selectableUl.prev(),
                $selectionSearch = that.$selectionUl.prev(),
                selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e){
                    if (e.which === 40){
                        that.$selectableUl.focus();
                        return false;
                    }
                });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e){
                    if (e.which == 40){
                        that.$selectionUl.focus();
                        return false;
                    }
                });
        },
        afterSelect: function(){
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function(){
            this.qs1.cache();
            this.qs2.cache();
        }
    });


})
</script>
@endsection