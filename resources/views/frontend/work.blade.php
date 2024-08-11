@extends('layouts.front_layouts.front_master')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Work</li>
        </ol>
        <h2>Our Work</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="inner-page portfolio">
      <div class="container">
        <div id="video_container" class="container video_container" data-aos="fade-up" data-aos-delay="150">
          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>
          <div class="row portfolio-container" >
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="vid htmlvid" style="background-image:url('assets/images/works/work1.png')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work2.png')}}')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work3.png')}}')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work4.png')}}')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work5.png')}}')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work6.png')}}')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work1.png')}}')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work2.png')}}')" vidsrc="assets/videos/towers.mp4">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work2.png')}}')" vidsrc="assets/videos/towers.mp4">
                <div class="video-module with-animation">
                  <div class="btn-play btn-round">
                    <i class="ri-play-mini-line "></i>
                  </div>
                </div>
              </div>
            </div>
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