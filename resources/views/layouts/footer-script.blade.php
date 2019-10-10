<!-- Vendor js -->
<script src="{{ URL::asset('assets/js/vendor.min.js') }}"></script>

 @yield('script')

<!-- App js -->
<script src="{{ URL::asset('assets/js/app.min.js') }}"></script>

<script>
var now_url =  window.location.href;
var array = now_url.split("/");
var my_item_index =  array.length -1 ;
if(array[my_item_index] == 'layouts-topbar-light')
{
    document.body.setAttribute('class','');
    document.body.classList.add('menubar-dark');
    document.body.classList.add('topbar-light');
}
else if(array[my_item_index] == 'layouts-menubar-dark')
{
    document.body.setAttribute('class','');
    document.body.classList.add('menubar-dark');
}
else if(array[my_item_index] == 'layouts-center-menu')
{
    document.body.setAttribute('class','');
    document.body.classList.add('center-menu');
}
else if(array[my_item_index] == 'layouts-preloader')
{
    
}
else if(array[my_item_index] == 'layouts-normal-header')
{
    document.body.setAttribute('class','');
    document.body.classList.add('unsticky-header');
}
else if(array[my_item_index] == 'layouts-boxed')
{
    document.body.setAttribute('class','');
    document.body.classList.add('boxed-layout');
}
else
{

}

function preloader_fun()
{
    document.getElementById("if_need_loader").style.display = "block";
    document.getElementById("preloader").style.display = "block";
    document.getElementById("status").style.display = "block";
   setTimeout(function() {   document.getElementById("if_need_loader").style.display = "none";   }, 1500);
}

</script>

@yield('script-bottom')