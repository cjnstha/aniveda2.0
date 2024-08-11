  @extends('layouts.front_layouts.front_master')
  @section('content')
  <!-- ======= About Section ======= -->
      <section id="about" class="about bg-light">
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

      <!-- ======= Services Section ======= -->
      <section class="section services" id="services">
        <div class="container">
          <div class="row align-items-center">
             <div class="col-md-4 me-auto">
                <h2 class="mb-4">Seamlessly Communicate</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
                <div class="btns-box"><a href="#" class="btn-theme box-shadow"><span class="txt">Read More</span></a></div>
             </div>
             <div class="col-md-6" data-aos="fade-left"> <img src="{{url('front/assets/images/undraw_svg_2.svg')}}" alt="Image" class="img-fluid"></div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
              <h2 class="mb-4">Gather Feedback</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
              <div class="btns-box"><a href="#" class="btn-theme box-shadow"><span class="txt">Read More</span></a></div>
            </div>
            <div class="col-md-6" data-aos="fade-right"> <img src="{{url('front/assets/images/undraw_svg_3.svg')}}" alt="Image" class="img-fluid"></div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio bg-light">
        <div class="container">

          <div class="section-title">
            <span>Our Work</span>
            <h2>Our Work</h2>
            <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
          </div>
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
                <div class="vid htmlvid" style="background-image:url('front/assets/images/works/work1.png')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
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
                <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work3.png')}}')" vidsrc="{{asset('front/assets/videos/towers.mp4')}}">
                  <div class="video-module with-animation">
                    <div class="btn-play btn-round">
                      <i class="ri-play-mini-line "></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work4.png')}}')" vidsrc="{{asset('front/assets/videos/towers.mp4')}}">
                  <div class="video-module with-animation">
                    <div class="btn-play btn-round">
                      <i class="ri-play-mini-line "></i>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work5.png')}}')" vidsrc="{{asset('front/assets/videos/towers.mp4')}}">
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
                <div class="vid htmlvid" style="background-image:url('{{url('front/assets/images/works/work2.png')}}')" vidsrc="{{url('front/assets/videos/towers.mp4')}}">
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
            </div>
            <div class="text-center mt-4">
              <div class="btns-box"><a href="#" class="btn-theme box-shadow"><span class="txt">Read More</span></a></div>           
            </div>
          </div>
        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Testimonial Section ======= -->
      <section id="testimonial" class="testimonial">
        <div class="container">
          <div class="section-title">
            <span>Client Testimonial</span>
            <h2>What Our Client Says</h2>
            <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-3 d-none d-lg-block">
              <div class="testimonial-left h-100">
                <img class="img-fluid" src="{{url('front/assets/images/client/testimonial-1.jpg')}}" alt="">
                <img class="img-fluid" src="{{url('front/assets/images/client/testimonial-2.jpg')}}" alt="">
                <img class="img-fluid" src="{{url('front/assets/images/client/testimonial-3.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item text-center">
                  <div class="position-relative mb-5">
                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{url('front/assets/images/client/testimonial-1.jpg')}}" alt="">
                    <div class="testimonial-icon">
                      <i class="bx bxs-quote-left text-primary"></i>
                    </div>
                  </div>
                  <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                  <hr class="w-25 mx-auto">
                  <h5>Client Name</h5>
                  <span>Profession</span>
                </div>
                <div class="testimonial-item text-center">
                  <div class="position-relative mb-5">
                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{url('front/assets/images/client/testimonial-2.jpg')}}" alt="">
                    <div class="testimonial-icon">
                      <i class="bx bxs-quote-left text-primary"></i>
                    </div>
                  </div>
                  <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                  <hr class="w-25 mx-auto">
                  <h5>Client Name</h5>
                  <span>Profession</span>
                </div>
                <div class="testimonial-item text-center">
                  <div class="position-relative mb-5">
                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{url('front/assets/images/client/testimonial-3.jpg')}}" alt="">
                    <div class="testimonial-icon">
                      <i class="bx bxs-quote-left text-primary"></i>
                    </div>
                  </div>
                  <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                  <hr class="w-25 mx-auto">
                  <h5>Client Name</h5>
                  <span>Profession</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
              <div class="testimonial-right h-100">
                <img class="img-fluid" src="{{url('front/assets/images/client/testimonial-1.jpg')}}" alt="">
                <img class="img-fluid" src="{{url('front/assets/images/client/testimonial-2.jpg')}}" alt="">
                <img class="img-fluid" src="{{url('front/assets/images/client/testimonial-3.jpg')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="know-more d-flex justify-content-center align-items-center">
        <div class="know-more-content ">
          <h2 class="text-center">Ready to enhance your digital presence?</h2>

          <div class="get-in-touch text-center  mt-5">
            <div class="btns-box"><a href="#" class="btn-theme"><span class="txt">Read More</span></a></div>
          </div>
        </div>
      </section>

      @endsection
