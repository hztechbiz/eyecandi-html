<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Eyecandi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @include('layouts.head')
</head>
<body>

<div id="if_need_loader" style="display:none;">
      <div id="preloader">
            <div id="status">
                <div class="bouncingLoader"><div ></div><div ></div><div ></div></div>
            </div>
        </div>
        </div>

  {{-- @include('layouts.header') --}}
  <div class="wrapper store-wrapper">
    <div class="container-fluid">
      @yield('breadcrumb')
      @yield('content')
  </div> 
</div> 
@include('layouts.footer')
@include('layouts.rightbar')
@include('layouts.footer-script')    
</body>
</html>