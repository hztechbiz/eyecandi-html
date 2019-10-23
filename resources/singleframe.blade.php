@extends('layouts.master-store')

@section('css')

@endsection

@section('breadcrumb')
    <!-- start page title -->
  {{--   <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h3 class="page-title">Frames</h3>
            </div>
        </div>
    </div> --}}
    <!-- end page title -->
@endsection

@section('content')
    {{-- <div class="frame-topbar">
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <input name="" class="form-control" placeholder="Search...">
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="mt-5">Sort By</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control">
                                <option>All</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="mt-5">Show</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control">
                                <option>All</option>
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                                <option>40</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 offset-2">
                    <button class="btn btn-success float-right">Add New</button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row store-sidebar">

        <div class="col-md-9">
            @foreach($frame as $key => $value)
            <div class="col-md-12">
                <label>{{ $key }}:</label>
                <label>{{ $value }} </label>
            <div>    
        @endforeach
        </div>
    </div><!-- end col -->

    </div>

    <!-- end row -->
@endsection

@section('script')
    <script type="application/javascript">
        $(document).ready(function () {
            $('.sidebarcard .card-body').toggle();
            $('.sidebarcard .card-title').click(function () {
                var heading = this;
                var visible = $(this).parent().find('.card-body').toggle().is(":visible");
                if(visible){
                    $(heading).find(".heading-icom").addClass("fa-angle-up");
                    $(heading).find(".heading-icom").removeClass("fa-angle-down");
                }else{
                    $(heading).find(".heading-icom").removeClass("fa-angle-up");
                    $(heading).find(".heading-icom").addClass("fa-angle-down");
                }
            });
        });
    </script>
@endsection

@section('script-bottom')
@endsection