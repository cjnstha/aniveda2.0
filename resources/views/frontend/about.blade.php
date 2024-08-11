@extends('layouts.front_layouts.front_master')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section class="inner-page about">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-6 pt-4 pt-lg-0 content ps-5 order-2" data-aos="fade-left">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{url('front/assets/images/about.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section class="know-more d-flex justify-content-center align-items-center">
      <div class="know-more-content ">
        <h2 class="text-center">Ready to enhance your digital presence?</h2>

        <div class="get-in-touch text-center  mt-5">
          <div class="btns-box"><a href="#" class="btn-theme"><span class="txt">Read More</span></a></div>
        </div>
      </div>
    </section>
@endsection