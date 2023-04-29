@extends('layout')
@include('layouts.app')
@include('user.links')
@include('products-css')

<style>

</style>
<div class="page-banner overlay-dark bg-image" style="margin-top:-50px;background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
            <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Donate</li>
            </ol>
            </nav>
            <h1 class="font-weight-normal">Donate</h1>
        </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> 
    
<h1 class="text-success d-flex justify-content-center" style="font-size:25px;margin-top:40px">Welcome to our donation site. Where our hospital posts they're patients needs. 
</h1>
<br>
<div class="d-flex justify-content-center"><a href="{{ url('/download-file') }}" class="btn btn-primary ">Download file</a></div>
@section('content')
    @foreach ($products as $product)
    <div class="partnership-items">

    <div class="row">
        <div class="info">
            <h5>{{ $product->subheading }}</h5>
            <h2>{{ $product->heading }}</h2>
            <p style="color:green; font-weight:500;">by {{ $product->autor }}</p>
            <p>{{ $product->description }}... <a href="">read&nbsp;more</a></p>
            <p>We would appreciate if you donated   <span style="color:red; font-weight:500;">€{{ $product->price }}</span></p>

            <div class="info2"> 
                <p style="color:green; font-weight:500;">€{{ $product->raisedMoney }} raised of</p>
                <p style="color:green; font-weight:500;"> €{{ $product->goalMoney }} goal</p>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
           </div>
           <br>
            <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary btn-block text-center" style="width:150px;"role="button">Add to cart</a> </p>

        </div>
        
        <div class="img-container" data-aos='zoom-in-up'>
            <div class="bg"></div>
                <img src="donateimage/{{$product->image}} "class="img" alt="img">
             </div>
        </div>
    </div>    </div>

    @endforeach     
@endsection

@include('user.script')
