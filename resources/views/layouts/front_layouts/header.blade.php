
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <a href="index.html" class="logo"><img src="{{asset('front/assets/images/LOGO_ONLY.png')}}" alt="" class="img-fluid"></a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/about-us')}}">About</a></li>
          <li><a class="nav-link scrollto " href="{{url('/services')}}">Services</a></li>
          <li><a class="nav-link scrollto " href="{{url('/portfolios')}}">Work</a></li>
          {{-- <li><a class="nav-link scrollto" href="contact.html">Contact</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header>