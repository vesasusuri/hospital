<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Medinova</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('layouts.app')

    @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"> x </button>
            {{session()->get('message')}}
        </div>

    @endif
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
    @include('user.appointment')
    @include('user.script')

</body>

</html>
