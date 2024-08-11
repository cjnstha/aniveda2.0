@extends('layouts.front_layouts.front_master')
@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>services</li>
        </ol>
        <h2>Our Services</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="services" class="inner-page services">
      <div class="container">
        <div class="pagesec-title" data-aos="fade-up">
          {{-- <h2>Services</h2> --}}
          <h2>Check out the great services we offer</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
            <h1>Bettter digital experience with Ninestars</h1>
            <h2>We are team of talanted designers making websites with Bootstrap</h2>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{url('front/assets/images/hero-img.svg')}}" class="img-fluid animated" alt="">
          </div>
        </div>

        <div class="row pt-5">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
            </div>
          </div>

          <div class="col-12 text-center mt-5" data-aos="fade-right" >
            <a href="javascript:void(0);" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#servicesModalCenter">Get A Quote</a>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <section class="know-more d-flex justify-content-center align-items-center">
      <div class="know-more-content ">
        <h2 class="text-center">Ready to enhance your digital presence?</h2>

        <div class="get-in-touch text-center  mt-5">
          <div class="btns-box"><a href="#" class="btn-theme"><span class="txt">Read More</span></a></div>
        </div>
      </div>
    </section>

@endsection