<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.links') 
</head>

<body>

    <!-- Back to top button -->


    @include('layouts.app')

 
    <div class="page-hero page-section pb-0 bg-image overlay-dark "  style="margin-top:-50px;background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="container ">
        <div class="row align-items-center" >
            <div class="col-lg-6 py-3  wow zoomIn">
                <h1 class="display-4 text-light">Welcome to Your Health Center</h1>
                <span class="subhead text-light">Let's make your life happier</span>

            </div>
            <div class="col-lg-6 wow zoomIn" >
                <img src="../assets/img/bg-doctor.png" style="width:400px;height:500px"alt="">
            </div>
        </div>
        </div>
    </div>
    @include('user.doctors')
    <div class="back-to-top"></div>
    @if(session()->has('message'))

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"> x </button>
    {{session()->get('message')}}
</div>

@endif

    @include('user.appointment')
    @include('user.script')
    @include('user.footer')

</body>

</html>
