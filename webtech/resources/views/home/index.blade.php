@include('layouts.homelayouts.header')

   @if(isset($slider))
    <header class="text-white">
      <div id="home-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
          <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#home-carousel" data-slide-to="1"></li>
          <li data-target="#home-carousel" data-slide-to="2"></li>
        </ol>

       <!--  -->
       
       <!--  -->




        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('assets/home/images/home-slide-1.png')}}">
            <div class="main-header">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-lg-6 d-flex">
                    <div class="header-content my-auto pl-30"> 
                      <h5 class="text-uppercase mb-3 animate__animated animate__backInLeft animate__delay-1s animate__slow">IT Business Consulting</h5>
                      <h1 class="animate__animated animate__backInLeft animate__delay-1s animate__slow">Our Agency Provide<br>Best IT Solutions</h1>
                      <a class="btn btn-xl btn-outline-light mb-3 animate__animated animate__backInUp animate__delay-4s" href="#/" target="_blank">Learn more</a>    
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 animate__animated animate__backInRight animate__delay-2s animate__slow">
                    <img src="{{ url('assets/home/images/banner/banner-image.png')}}" class="img-fluid pr-30" style="max-width: 100%;height: auto;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/home/images/home-slide-2.jpg')}}">
            <div class="main-header">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-lg-6 d-flex">
                    <div class="header-content my-auto">                  
                      <h5 class="text-uppercase mb-3 animate__animated animate__backInLeft animate__delay-1s animate__slow">IT Business Consulting</h5>
                      <h1 class="animate__animated animate__backInLeft animate__delay-1s animate__slow">Our Agency Provide<br>Best IT Solutions</h1>
                      <a class="btn btn-xl btn-outline-light mb-3 animate__animated animate__backInUp animate__delay-4s" href="#" target="_blank">Learn More</a>                      
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 animate__animated animate__backInRight animate__delay-2s animate__slow"> 
                    <img src="{{ url('assets/home/images/banner/banner-image.png')}}" class="img-fluid" style="max-width: 100%;height: auto;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/home/images/home-slide-1.png')}}">
            <div class="main-header">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-lg-6 d-flex">
                    <div class="header-content my-auto">
                      <h5 class="text-uppercase mb-3 animate__animated animate__backInLeft animate__delay-1s animate__slow">IT Business Consulting</h5>
                      <h1 class="animate__animated animate__backInLeft animate__delay-1s animate__slow">Our Agency Provide<br>Best IT Solutions</h1>
                      <a class="btn btn-xl btn-outline-light mb-3 animate__animated animate__backInUp animate__delay-4s" href="#" target="_blank">Learn More</a>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 animate__animated animate__backInRight animate__delay-2s animate__slow"> 
                    <img src="{{ url('assets/home/images/banner/banner-image.png')}}" class="img-fluid" style="max-width: 100%;height: auto;">
                  </div>
                </div>
              </div>
            </div>           
          </div>
        </div>
        <a class="carousel-control-prev header-arrow-left" href="#home-carousel" role="button" data-slide="prev"><img src="{{ url('assets/home/images/header-arrow-left.png')}}"></a>
        <a class="carousel-control-next header-arrow-right" href="#home-carousel" role="button" data-slide="next"><img src="{{ url('assets/home/images/header-arrow-right.png')}}"></a>
      </div>
    </header>
    @endif
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-right" data-aos-offset="500" data-aos-duration="1500">
            <img src="{{ url('assets/home/images/about-illustration.png')}}" class="img-fluid" style="max-width: 100%;height: auto;">
          </div>
          <div class="col-md-6">
            <div class="content-box">
              <div class="content-box-outer">
                <div class="content-box-inner" data-aos="fade-up" data-aos-offset="500">
                  <div id="about-title" class="mb-5">
                    <h6 class="sm-blue-heading">// ABOUT COMPANY</h6>
                    <h1 class="smh">Your Partner for Software Innovation</h1>
                  </div>
                  <div class="mb-5">
                    <p class="op17">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                    <p class="op17" style="font-weight: 600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div id="about-button" class="blue-btn pull-left" data-aos="fade-up" data-aos-duration="2000">
                    <a href="#" class="btn btn-outline-primary">Learn more <span class="fa fa-angle-right ml-2"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ciadp-section clearfix">
      <div class="container">
        <div class="col-lg 12 col-md-12" data-aos="fade-up" data-aos-duration="2000">
          <h5 class="sm-blue-heading">// PROCESS</h5>
          <h2 class="smh">Recipe for Well Designed and well defined solutions</h2>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 ciadp-left" data-aos="fade-right" data-aos-duration="1500">
          <div class="ciadp-block ci-tleft">
            <div class="ciadp-list">
              <ul>
                <li>Client's Requirement</li>
                <li>Competitive Analysis</li>
                <li>Creation Of App Strategy</li>
              </ul>
            </div>
            <div class="ciadp-thumb"> 
              <span>1</span> 
              <img src="{{ url('assets/home/images/creative-analysis.png')}}" alt="" />
              <h4>Creative  <br>Analysis</h4> 
            </div>
          </div>
          <div class="ciadp-block ci-bleft">
            <div class="ciadp-list">
              <ul>
                <li>App Coding</li>
                <li>Improvising The Layouts</li>
                <li>Client's Approval</li>
              </ul>
            </div>
            <div class="ciadp-thumb"> 
              <span>3</span> 
              <img src="{{ url('assets/home/images/development.png')}}" alt="" />
              <h4>Development  <br>& Testing </h4> 
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 ciadp-right" data-aos="fade-left" data-aos-duration="1500">
          <div class="ciadp-block ci-tright">
            <div class="ciadp-list">
              <ul>
                <li>Creation Of Blue Print<br>Structures</li>
                <li>Prototyping</li>
                <li>Designing UI/UX</li>
              </ul>
            </div>
            <div class="ciadp-thumb"> 
              <span>2</span> 
              <img src="{{ url('assets/home/images/wireframing.png')}}" alt="" />
              <h4>Wireframing <br>&amp; UI/UX Design</h4> 
            </div>
          </div>
          <div class="ciadp-block ci-bright">
            <div class="ciadp-list">
              <ul>
                <li>Carrying Out
                  <br> A/B Testing </li>
                <li>Deployment to
                  <br> Google Play Store </li>
                <li>Deployment To
                  <br> Clients’ Server</li>
              </ul>
            </div>
            <div class="ciadp-thumb"> 
              <span>4</span> 
              <img src="{{ url('assets/home/images/app-launch.png')}}" alt="" />
              <h4>App<br>Launch</h4> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="work-with-us">
      <div class="container">
        <div class="row text-white wwu">
          <div class="col-lg-5 col-md-5 col-sm-12 d-flex">
            <h1 class="my-auto mx-auto" id="wwu-title" data-aos="fade-right" data-aos-duration="1500">Work With us</h1>
          </div>
          <div class="col-lg-1 col-md-1 col-sm-1" id="vertical-divider" data-aos="fade-up" data-aos-duration="2500"></div>
          <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="2000">
            <p class="mont20white">Ready to get started? We’re here and ready to help you learn more about our mobile app development services.</p>
            <a class="btn btn-lg btn-outline-light my-3" href="#" target="_blank">Get Quoute</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="{{ url('assets/home/images/services-Illustration.png')}}" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="img-fluid" style="max-width: 100%; and height: auto;">
            </div>
            <div class="col-md-6">
              <div class="content-box" data-aos="zoom-in-left" data-aos-duration="1500">
                <div class="content-box-outer">
                  <div class="content-box-inner">
                    <div id="about-title" class="mb-5">
                      <h6 class="sm-blue-heading">// WHAT WE DO?</h6>
                      <h1 class="smh">Explore the services that best fit for your solution</h1>
                    </div>
                    <div class="mb-5">
                      <p class="op17">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-md-4 service_item">
              <div class="service-item-box py-3 px-lg-5">
                <a href="#">
                  <img src="{{ url('assets/home/images/App-dev.png')}}">
                </a>
                <h3>App Development</h3>
                <p class="op16">{{$app=App\Preference::where('name','app_dev')->pluck('value')->first()}}</p>      
              </div>            
            </div>
            <div class="col-md-4 service_item">
              <div class="service-item-box py-3 px-lg-5">
                <a href="/#">
                  <img src="{{ url('assets/home/images/web-dev.png')}}">
                </a>
                <h3>Web Development</h3>
                <p class="op16">{{$web_dev=App\Preference::where('name','web_dev')->pluck('value')->first()}}</p>      
              </div>            
            </div>
            <div class="col-md-4 service_item">
              <div class="service-item-box py-3 px-lg-5">
                <a href="#">
                  <img src="{{ url('assets/home/images/design.png')}}">
                </a>
                <h3>Design & UI/UX</h3>
                <p class="op16">{{$design=App\Preference::where('name','design')->pluck('value')->first()}}</p>      
              </div>            
            </div>
            <div class="col-md-4 service_item">
              <div class="service-item-box py-3 px-lg-5">
                <a href="#">
                  <img src="{{ url('assets/home/images/Socail-Media Marketing.png')}}">
                </a>
                <h3>Social Media Marketing</h3>
                <p class="op16">{{$marketing=App\Preference::where('name','marketing')->pluck('value')->first()}}</p>      
              </div>            
            </div>
            <div class="col-md-4 service_item">
              <div class="service-item-box py-3 px-lg-5">
                <a href="#">
                  <img src="{{ url('assets/home/images/Dev.png')}}">
                </a>
                <h3>Software Development</h3>
                <p class="op16">{{$soft_dev=App\Preference::where('name','soft_dev')->pluck('value')->first()}}</p>      
              </div>            
            </div>
            <div class="col-md-4 service_item">
              <div class="service-item-box py-3 px-lg-5">
                <a href="#">
                  <img src="{{ url('assets/home/images/SEO.png')}}">
                </a>
                <h3>S.E.O</h3>
                <p class="op16">{{$seo=App\Preference::where('name','seo')->pluck('value')->first()}}</p>      
              </div>            
            </div>
          </div>
        </div>
      </section>

      <!-- <section id="testimonials">
        <div id="demo" class="carousel slide testimonial-text-slides" data-ride="carousel" data-interval="2100">
          <div class="carousel-inner text-center">
            <div class="carousel-item active">
               <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
            <div class="carousel-item">
              <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
            <div class="carousel-item">
              <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
            <div class="carousel-item">
              <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
            <div class="carousel-item">
              <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
            <div class="carousel-item">
              <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
            <div class="carousel-item">
              <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
            <div class="carousel-item">
              <p>built an iPhone and Android application with a robust venue portal for our event platform. We finished our MVP on time and on budget, and we are on our way to build strong business. Thanks to guys at DS Web tech, </p>
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="testimonial-img-slides hi-slide">
            <div class="hi-prev "></div>
            <div class="hi-next "></div>
            <ul>
              <li>
                <img src="{{ url('assets/home/images/p_1.png')}}" alt="Img 1" />
              </li>
              <li>
                <img src="{{ url('assets/home/images/p_2.png')}}" alt="Img 2" />
              </li>
              <li>
                <img src="{{ url('assets/home/images/p_3.png')}}" alt="Img 3" />
              </li>
              <li>
                <img src="{{ url('assets/home/images/p_4.png')}}" alt="Img 4" />
              </li>
              <li>
                <img src="{{ url('assets/home/images/p_5.png')}}" alt="Img 5" />
              </li>
              <li>
                <img src="{{ url('assets/home/images/p_1.png')}}')}}" alt="Img 6" />
              </li>
              <li>
                <img src="{{ url('assets/home/images/p_2.png')}}')}}" alt="Img 7" />
              </li>
              <li>
                <img src="{{ url('assets/home/images/p_3.png')}}')}}" alt="Img 8" />
              </li>
            </ul>
          </div>
        </div>
      </section> -->

      <section id="our-work">
        <div class="container">
          <div class="row my-5">
            <div class="col-md-6" data-aos="fade-up-right" data-aos-duration="2000">
              <div class="content-box">
                <div class="content-box-outer">
                  <div class="content-box-inner">
                    <div id="about-title" class="mb-5">
                      <h6 class="sm-blue-heading">// SOME OF OUR WORK</h6>
                      <h1 class="smh">Grow Your Business With us</h1>
                    </div>
                    <div class="mb-5">
                      <p class="op17">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="blue-btn">
                      <a href="#" class="btn btn-outline-primary">Explore All<span class="fa fa-angle-right ml-2"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
              <img src="{{ url('assets/home/images/illustration_portfoilo.png')}}" class="img-fluid" style="max-width: 100%; and height: auto;">
            </div>
          </div>
          <div class="row">
            <div class="card-deck">
              <div class="card" data-aos="flip-left" data-aos-offset="400" data-aos-duration="1500" data-aos-delay="100">
                <img class="card-img-top" src="{{ url('assets/home/images/our-work1.png')}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text op15">A smart Patient Appointment System with all-in-one scheduling, optimization and automation features. It streamlines practice and clinic operations, making it easier for the staff to reliably keep the doctors’ schedule full and improve patient wait times, satisfaction, and care.</p>
                </div>
              </div>
              <div class="card" data-aos="flip-left" data-aos-offset="400" data-aos-duration="1500" data-aos-delay="200">
                <img class="card-img-top" src="{{ url('assets/home/images/our-work2.png')}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text op15">A smart Patient Appointment System with all-in-one scheduling, optimization and automation features. It streamlines practice and clinic operations, making it easier for the staff to reliably keep the doctors’ schedule full and improve patient wait times, satisfaction, and care.</p>
                </div>
              </div>
              <div class="card" data-aos="flip-left" data-aos-offset="400" data-aos-duration="1500" data-aos-delay="300">
                <img class="card-img-top" src="{{ url('assets/home/images/our-work3.png')}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text op15">A smart Patient Appointment System with all-in-one scheduling, optimization and automation features. It streamlines practice and clinic operations, making it easier for the staff to reliably keep the doctors’ schedule full and improve patient wait times, satisfaction, and care.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
    
      
@include('layouts.homelayouts.partners')



  <!-- fixed navbar -->
@include('layouts.homelayouts.footer')
@include('layouts.homelayouts.scripts')
 
  </body>
</html>
