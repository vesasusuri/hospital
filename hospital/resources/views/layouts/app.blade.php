<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Medionva</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 <img src="../assets/img/logos/2.png" style= "width:200px;height:100px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupport"> 
                <ul class="navbar-nav me-auto">
                    
                </ul>

                <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                           <div style="margin-left:900px; display:flex;">
                           @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-info text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                           </div>
                        @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{url('home')}}" style="font-size:18px">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('donate')}}" style="font-size:18px">Donate</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('doctorVisits')}}" style="font-size:18px">Doctor Visits</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('news')}}"style="font-size:18px">News</a>
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{url('contact-us')}}"style="font-size:18px">Contact</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link"  href="{{url('myappointment')}}" style="font-size:18px">My Appointments</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary" data-toggle="dropdown">
                                         Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </button>
                                    
                                    <div class="dropdown-menu" style="width:300px;padding:10px;">
                                        <div class="row total-header-section">
                                            @php $total = 0 @endphp
                                            @foreach((array) session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp
                                            @endforeach
                                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                            </div>
                                        </div>
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        <img src="{{ asset('donateimage') }}/{{ $details['photo'] }}" style="width:100px;" />
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <p>{{ $details['product_name'] }}</p>
                                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>     
                            </ul>                   
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
