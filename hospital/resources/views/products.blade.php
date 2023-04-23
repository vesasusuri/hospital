@extends('layout')
@include('layouts.app')
@include('user.links')

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
    
<h1 class="text-success d-flex justify-content-center" style="font-size:25px;margin-top:40px">Welcome to our donation site. Where our hospital posts they're patients needs.</h1>
<br><br>
@section('content')

<div>
    @foreach ($products as $product)
        <div class="d-flex justify-content-evenly flex-wrap align-items-center " >
            <td>
            <img src="donateimage/{{$product->image}} " alt="img" style="width:400px;margin-left:-40px;">
            </td>
            <div class="grid-12 grid-md-6 grid-lg-12 js-result-p54436">
                <div class="grid-12 box_topMargin2Half box_md_horizontalPadded1 box_lg_horizontalPadded0 flex_growChildren ">
                <div class="grid-parent border_default col_white flex_grow1 ">
                <div class="grid-12 grid-lg-8 grid-parent box_horizontalPadded2 box_md_horizontalPadded4 box_lg_horizontalPadded2 box_verticalPadded2Half text_fontSizeSmall layout_alignLeft">
                    <b>
                        <span class="col_ggSecondary1LightText box_bottomPadded0 layout_centerVertical" style="color:gray;font-size:14px;">
                        {{ $product->subheading }}
                        </span>
                    </b>
                <br>
                    <b>
                        <span class="col_ggSecondary1LightText box_bottomPadded0 layout_centerVertical" style="font-size:22px">
                        {{ $product->heading }}
                        </span>
                    </b> 
                <div class="grid-12 box_verticalPaddedHalf">
                by <a class="col_inherit" rel="nofollow" href="/donate/72574"> {{ $product->autor }}</a>
                </div>
                <br>
                
                <div class="grid-12 col_ggSecondary1Text box_verticalMargin2" style="width:700px">
                {{ $product->description }} <a href="">read&nbsp;more</a>
                </div>
                <br>
                <div class="d-flex justify-content-between flex-wrap align-items-center grid-12 grid-parent layout_centerVertical">
                    <div class="grid-12 grid-lg-7 box_rightPadded5 box_topPaddedHalf box_bottomPadded2">
                    <span class="col_ggPrimary3DarkText text_fontSizeLarge text_7n">
                     We would appreciate if you donated   <span style="color:red;">€{{ $product->price }}</span>
                    </span>
                    <br><br>
                    <span class="col_ggPrimary3DarkText text_fontSizeLarge text_7n">
                        €{{ $product->raisedMoney + $product->price }}
                    </span>
                        raised of €{{ $product->goalMoney }} goal
                    </div>
                    <br>
                    <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>

                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <br><br>
    @endforeach
    </div>
    
@endsection

@include('user.script')
