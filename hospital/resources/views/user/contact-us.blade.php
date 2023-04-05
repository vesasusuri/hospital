<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.links')
</head>
<body>
  <div class="back-to-top"></div>

  @include('layouts.app')

  <div class="page-banner overlay-dark bg-image" style="margin-top:-50px;background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div>
    </div> 
  </div> 

  <div class="page-section">
    <div class="container">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form class="contact-form mt-5" method="POST" action="{{url('contact-us-form')}}">
      @csrf
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" name="name" placeholder="Full name.." required>
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" name="email" placeholder="Email address.." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" name="message" placeholder="Enter Message.." required></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
      </form>
    </div>
  </div>

  <div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
  </div>

@include('user.footer')
@include('user.script')
</body>
</html>