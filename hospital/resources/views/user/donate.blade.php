<?php
use App\Http\Controllers\DonationController;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.links')
</head>
<body>
    @include('layouts.app')

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

    <div>
    @foreach ($donate as $donations)
        <tr>
            <td>{{ $donations->image }}</td>
            <td>{{ $donations->heading }}</td>
            <td>{{ $donations->autor }}</td>
            <td>{{ $donations->description }}</td>
            <td>{{ $donations->raisedMoney }}</td>
            <td>{{ $donations->goalMoney }}</td>            
        </tr>

    @endforeach
    </div>

</body>
</html>    