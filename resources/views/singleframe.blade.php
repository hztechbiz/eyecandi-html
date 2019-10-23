@extends('layouts.master-store')

@section('css')

@endsection

@section('breadcrumb')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h3 class="page-title">Single Frames</h3>
            </div>
        </div>
    </div>
    <!-- end page title -->
@endsection

@section('content')
    <div class="frame-topbar">
        {{-- <div class=""> --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="image-frames"><img src="http://testapi.framesdata.com/api/images?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1&size=Large&id=116807"></div>
                </div class="col-md-6">
                    <div class="image-frames"><img src="http://testapi.framesdata.com:80/api/images?auth=4046ecc3-bc75-4bdf-ba48-e11ef8c8a0c1&size=XL&id=116807&vto=F"></div>
                    
                </div>
            
            <div class="row">
                @foreach($frame as $key => $value)
            <div class="col-md-10">
                <h5>{{ $key }}:</h5>
                <label>{{ $value }} </label>
            </div>    
        @endforeach
    </div>
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