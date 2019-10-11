@extends('layouts.master')

@section('css')

@endsection

@section('breadcrumb')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">

                <h3 class="page-title">Brands</h3>
            </div>
        </div>
    </div>
    <!-- end page title -->
@endsection

@section('content')
    <div class="row" style="padding: 10px;background: #ffff;margin-bottom: 20px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <input name="" class="form-control" placeholder="Search...">
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-4">
                            <label style="margin-top: 5px;">Sort By</label>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control">
                                <option>All</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 offset-5">
                    <button class="btn btn-primary">Add New</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="image-brand"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oakley</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20" style="margin-top: 19px;">
                    <div class="col-md-12">
                        <button class="text-center btn btn-lg btn-primary" style="margin-left: 106px;">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center" style="color:#6c757d">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center" style="color:#6c757d">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image_brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="image-brand"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oakley</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20" style="margin-top: 19px;">
                    <div class="col-md-12">
                        <button class="text-center btn btn-lg btn-primary" style="margin-left: 106px;">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center" style="color:#6c757d">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center" style="color:#6c757d">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image_brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="image-brand"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oakley</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20" style="margin-top: 19px;">
                    <div class="col-md-12">
                        <button class="text-center btn btn-lg btn-primary" style="margin-left: 106px;">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center" style="color:#6c757d">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center" style="color:#6c757d">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image_brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="image-brand"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oakley</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20" style="margin-top: 19px;">
                    <div class="col-md-12">
                        <button class="text-center btn btn-lg btn-primary" style="margin-left: 106px;">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center" style="color:#6c757d">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center" style="color:#6c757d">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image_brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="image-brand"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oakley</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20" style="margin-top: 19px;">
                    <div class="col-md-12">
                        <button class="text-center btn btn-lg btn-primary" style="margin-left: 106px;">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center" style="color:#6c757d">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center" style="color:#6c757d">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image_brands.png')) }}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box brands">
                <div class="row">
                    <div class="image-brand"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Oakley</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center brand-company" >Company ID: 450392</h4>
                    </div>
                </div>
                <div class="row mt-20" style="margin-top: 19px;">
                    <div class="col-md-12">
                        <button class="text-center btn btn-lg btn-primary" style="margin-left: 106px;">View Frames</button>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-4">
                        <h5 class="text-center" style="color:#6c757d">30-day Views</h5>
                        <h4 class="text-center">345</h4>
                    </div>
                    <div class="col-md-4 offset-4">
                        <h5 class="text-center" style="color:#6c757d">All Time Views</h5>
                        <h4 class="text-center">34k</h4>
                    </div>
                </div>
                <div class="row mt-20">
                    <img src="{{ url(asset('assets/images/image_brands.png')) }}">
                </div>
            </div>
        </div>
    </div><!-- end col -->

    </div>

    <!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection