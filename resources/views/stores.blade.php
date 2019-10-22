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
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="store-logo">
                                <image src="{{ asset('assets/images/Image-7.png') }}">
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">New Arrival
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">

                            <div id="cardCollpase1" class="collapse card-content show">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            NEW
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Age
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div id="cardCollpase1" class="collapse card-content show">
                                @foreach($ages as $age)                                    
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            {{ $age['AgeGroupValue'] }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Adult
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Child
                                        </label>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Gender
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">

                            <div id="cardCollpase1" class="collapse card-content show">
                                @foreach($genders as $gender)
                                    <div class="form-group">                                
                                        <div class="checkbox">
                                            <input id="checkbox0" type="checkbox">
                                            <label for="checkbox0">
                                                {{ $gender['GenderGroupValue'] }}
                                            </label>    
                                        </div>
                                    </div>
                                @endforeach
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Brand
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">

                            <div id="cardCollpase1" class="collapse card-content show">
                                @foreach($brands as $brand)
                                <div class="form-group"> 
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            {{ $brand['BrandName'] }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Size
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">

                            <div id="cardCollpase1" class="collapse card-content show">
                                <div class="form-group">                            
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Extra Small
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Small
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Medium
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">                                
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Large
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">                                
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Extra Large
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Color
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">

                            <div id="cardCollpase1" class="collapse card-content show">
                                @foreach($colors as $color)
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            {{ $color['ColorValue'] }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Shape
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div id="cardCollpase1" class="collapse card-content show">
                                <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox0" type="checkbox">
                                    <label for="checkbox0">
                                        Aviator
                                    </label>
                                </div>
                            </div>
                                <div class="form-group">                            
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Cat-Eye
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">                                
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Oval
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Rim Type
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div id="cardCollpase1" class="collapse card-content show">
                                <div class="form-group">    
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Full Rim
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox0" type="checkbox">
                                    <label for="checkbox0">
                                        Rimless
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox0" type="checkbox">
                                    <label for="checkbox0">
                                        Semi Rimless
                                    </label>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Material
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">

                            <div id="cardCollpase1" class="collapse card-content show">
                                @foreach($materials as $Material)
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            {{ $Material['MaterialValue'] }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card sidebarcard">
                        <div class="card-title">
                            <h5 class="card-heading">Nosepads
                                <i class="fas fa-angle-down heading-icom"></i>
                            </h5>
                        </div>
                        <div class="card-body">

                            <div id="cardCollpase1" class="collapse card-content show">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Nosepads
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row store-heading">
                <div class="col-md-7">
                    <h1>Browse our frames, then </h1>
                    <h1>request an <span style="font-weight: 100;font-family: -webkit-pictograph;font-style: italic;">in-person</span> try on.</h1>
                </div>
                <div class="col-md-5">
                    <div class="store-button">
                        <a class="btn btn-lg btn-rounded btn-outline-light">About Us</a>
                        <a class="btn btn-lg btn-success btn-rounded width-md waves-effect waves-light">Schedule a 20/20 Exam</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame1.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame2.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame3.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame4.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame5.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame6.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame7.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame8.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box frames">
                        <div class="row">
                            <div class="image-frames"><img src="{{asset('assets/images/frames/frame9.png')}}"></div>
                        </div>
                        <div class="row mt-20">
                            <h4 class="frame-title">BrandName</h4>
                            <h3 class="frame-description">Pellentesque Tristique</h3>
                            <h4 class="frame-id">ID: 495982</h4>
                        </div>
                    </div>
                </div>
            </div>
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