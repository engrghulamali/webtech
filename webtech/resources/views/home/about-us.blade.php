
@include('layouts.homelayouts.header')
<style>
      
      #contact-info{
        padding-left: 15px;
        margin-top: 30px;
        margin-bottom: 30px;
      }
    </style>
    <div class="p-header-bg">
      
      <header>
        <div class="container header-content">
            <div class="header-content-inner text-white text-center">
              <h1>About us</h1>
              <p>Your Software Development Partners</p>
            </div>
        </div>
      </header>
    </div>

    <section id="about" class="clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <img src="{{ url('assets/home/images/about_us/about.png')}}" class="img-fluid my-auto" style="max-width: 100%; height: auto;">
          </div>
          <div class="col-md-6">
            <div id="about-title">
              <h6 class="sm-blue-heading">// ABOUT US</h6>
              <h1 class="smh">DS Web tech Introduction</h1>
            </div>
            <div class="mb-5 about-text">
              <p>Based in Toronto, Canada we at InvoZone aim to grab the leading position as an outsourcing software development company. We take pride in developing innovative software solutions for enterprises located all across the globe, helping them grow their business by increasing their online presence and overall revenue. Our focus lies in, but we are not restricted to, designing, software engineering, and development solutions.
                <br><br>
              For several years, we have been developing software products using the best minds (team of designers) and business people. The mutual efforts of our team create a tech-savvy environment with an acute business sense. At InvoZone, we work to be at the forefront of web-based business initiatives. Thereby, we offer a one-stop-shop for all your web business needs.
                <br><br>
              Our exceptional services make us the best choice for we address technical challenges and meet the client’s objectives in real-time. InvoZone has made its reputation by working endlessly for its global clients.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="our-core-values" class="clearfix">
      <div id="ocv-overlay">
        <div class="container">
          <div class="row text-white">
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex">         
                <div class="my-auto mx-auto">
                  <h6 class="sm-heading">// OUR BELIEF</h6>
                  <h1 class="lg-heading">Our Core Values</h1>
                </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ url('assets/home/images/about_us/team.png')}}" class="float-md-left ocv-img">
                    <div class="ocv-content">
                      <h3 class="name d-inline-block">Team Work</h3>
                      <p class="description d-inline-block">Our work-Intensive team craves success and achievement, which defines our positive mindset towards any sort of challenge, whether in outsourcing or software development as a whole.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                      <img src="{{ url('assets/home/images/about_us/Agile.png')}}" class="float-md-left ocv-img">
                     <div class="ocv-content">
                        <h3 class="name">Agility</h3>
                        <p class="description">Our work methodology works like a spearhead towards challenges, enabling us to complete our duties flawlessly, without any delays.</p> 
                     </div>                        
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                      <img src="{{ url('assets/home/images/about_us/leader.png')}}" class="float-md-left ocv-img">
                      <div class="ocv-content">
                        <h3 class="name">Leadership</h3>
                        <p class="description">Leaders lead by example and so do ours who have achieved their rightful place through years’ of experience and in-depth know-how of today’s software development trends.</p>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                      <img src="{{ url('assets/home/images/about_us/culture.png')}}" class="float-md-left ocv-img">
                      <div class="ocv-content">
                        <h3 class="name">Culture</h3>
                        <p class="description">We embrace the idea of meeting people with different knowledge and background because we are a pool that promotes innovation by leveraging emerging tools and technology.</p>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="why-us" class="clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="content-box">
              <div class="content-box-outer">
                <div class="content-box-inner">
                  <div id="why-us-title" class="mb-5">
                    <h6 class="sm-blue-heading">// WHY US</h6>
                    <h1 class="smh">Our Working Methodes</h1>
                  </div>
                  <div class="mb-5 wh-us-text">
                    <p>With InvoZone you are on road to building a great client relationship. We love to code and explore technologies that can help improve lives. Our top-notch results are a product of marvellous software development techniques. We do this through:
                    </p>
                    <div class="features mt-lg-5"><img src="{{ url('assets/home/images/about_us/xmlid-760.png')}}"><span>High performance and next-level engineering</span></div>
                    <div class="features"><img src="{{ url('assets/home/images/about_us/talent.png')}}"><span>Recruitment of top talent who support our ideology</span></div>
                    <div class="features"><img src="{{ url('assets/home/images/about_us/Group.png')}}"><span>A great customer experience that goes a long wayv</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <img src="{{ url('assets/home/images/about_us/team-meeting.png')}}" class="img-fluid my-auto">
          </div>
        </div>
      </div>
    </section>
    @isset($teams)
    <section id="meet-the-team" class="clearfix">
      <div id="team-overlay">
        <div class="container">
          <div class="row pt-md-4">
           
            <div class="col-md-12 col-sm-12 text-center">
              <h6 class="sm-blue-heading">// MINDS BEHIND SUCCESS</h6>
              <h1 class="mtt-heading">Meet the Team</h1>
            </div>
             @foreach($teams as $team)
            <div class="col-lg-3 col-md-6 col-sm-12 mt-md-5 mb-4">
              <div class="team-member text-white text-center">
                <img src="{{asset('/images/teams/'.$team->image) }}" class="mx-auto" style="width: 300px; height: 300px;" />
                <h4 class="mt-3">{{$team->name}}</h4>
                <p>{{$team->position}}</p>
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="{{$team->skype}}"><img src="{{ url('assets/home/images/about_us/skype.png')}}"></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{$team->linkedin}}"><img src="{{ url('assets/home/images/about_us/linkdin.png')}}"></a>
                    </li>
                </ul>
              </div>
            </div>
            @endforeach
           <!--  <div class="col-lg-3 col-md-6 col-sm-12 mt-md-5 mb-4">
              <div class="team-member text-white text-center">
                <img src="{{ url('assets/home/images/about_us/team-member.png')}}" class="mx-auto" />
                <h4 class="mt-3">JOHN DOE</h4>
                <p>Chief Executive Officer</p>
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="#"><img src="{{ url('assets/home/images/about_us/skype.png')}}"></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"><img src="{{ url('assets/home/images/about_us/linkdin.png')}}"></a>
                    </li>
                </ul>
              </div>
            </div> -->
           <!--  <div class="col-lg-3 col-md-6 col-sm-12 mt-md-5 mb-4">
              <div class="team-member text-white text-center">
                <img src="{{ url('assets/home/images/about_us/team-member.png')}}" class="mx-auto" />
                <h4 class="mt-3">JOHN DOE</h4>
                <p>Chief Executive Officer</p>
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="#"><img src="{{ url('assets/home/images/about_us/skype.png')}}"></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"><img src="{{ url('assets/home/images/about_us/linkdin.png')}}"></a>
                    </li>
                </ul>
              </div>
            </div> -->
           <!--  <div class="col-lg-3 col-md-6 col-sm-12 mt-md-5 mb-4">
              <div class="team-member text-white text-center">
                <img src="{{ url('assets/home/images/about_us/team-member.png')}}" class="mx-auto" />
                <h4 class="mt-3">JOHN DOE</h4>
                <p>Chief Executive Officer</p>
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="#"><img src="{{ url('assets/home/images/about_us/skype.png')}}"></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"><img src="{{ url('assets/home/images/about_us/linkdin.png')}}"></a>
                    </li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    @endif
    <section id="pricing">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-3 mb-3">
                <!-- Pricing Card -->
                <div class="pricing-card">
                    <div class="p-card text-white text-center mt-1">
                        <!-- Header -->
                        <header class="c-header p-3">
                            <h2 class="h5 mb-4">Full Time</h2>
                            <span class="d-block">
                                <span class="display-2 font-weight-bold">8</span>
                                <span class="d-block font-small">Hours per day</span>
                                <span class="d-block text-light font-small">&nbsp;</span>
                            </span>
                        </header>
                        <!-- End Header -->
                        <!-- Content -->
                        <div class="c-body">
                              <p class="l-group-item">5 days a week</p>
                              <p class="l-group-item">Dedicated Resource</p>
                              <p class="l-group-item">One Week Free Trial</p>
                              <p class="px-2">2 weeks notice provided if you wish to discontinue the service</p>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- End of Pricing Card -->
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <!-- Pricing Card -->
                <div class="pricing-card">
                    <div class="p-card text-white text-center mt-1">
                        <!-- Header -->
                        <header class="c-header p-3">
                            <h2 class="h5 mb-4">Part Time</h2>
                            <span class="d-block">
                                <span class="display-2 font-weight-bold">4</span>
                                <span class="d-block font-small">Hours per day</span>
                                <span class="d-block text-light font-small">&nbsp;</span>
                            </span>
                        </header>
                        <!-- End Header -->
                        <!-- Content -->
                        <div class="c-body">
                                <p class="l-group-item">5 days a week</p>
                                <p class="l-group-item">Dedicated Resource</p>
                                <p class="l-group-item">One Week Free Trial</p>
                                <p class="px-2">2 weeks notice provided if you wish to discontinue the service</p>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- End of Pricing Card -->
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <!-- Pricing Card -->
                <div class="pricing-card">
                    <div class="p-card text-white text-center mt-1">
                        <!-- Header -->
                        <header class="c-header p-3">
                            <h2 class="h5 mb-4">Hourly</h2>
                            <span class="d-block">
                                <span class="display-2 font-weight-bold">2</span>
                                <span class="d-block font-small">Hours per day</span>
                                <span class="d-block text-light font-small">&nbsp;</span>
                            </span>
                        </header>
                        <!-- End Header -->
                        <!-- Content -->
                        <div class="c-body">
                                <p class="l-group-item">5 days a week</p>
                                <p class="l-group-item">Dedicated Resource</p>
                                <p class="l-group-item">One Week Free Trial</p>
                                <p class="px-2">2 weeks notice provided if you wish to discontinue the service</p>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- End of Pricing Card -->
            </div>
            <div class="col-md-6 col-lg-3 mb-3">
                <!-- Pricing Card -->
                <div class="pricing-card">
                    <div class="p-card text-white text-center mt-1">
                        <!-- Header -->
                        <header class="c-header p-3">
                            <h2 class="h5 mb-4">Projects</h2>
                            <span class="d-block">
                                <span class="display-1 font-weight-bold">Fix Gigs</span>
                                <span class="d-block text-light font-small">&nbsp;</span>
                                <span class="d-block text-light font-small">&nbsp;</span>
                            </span>
                        </header>
                        <!-- End Header -->
                        <!-- Content -->
                        <div class="c-body mt-md-3">
                                <p class="l-group-item">Key Milestone</p>
                                <p class="l-group-item">Timeline</p>
                                <p class="l-group-item">Cost Estimates</p>
                                <p class="l-group-item">&nbsp;</p>
                                <span class="d-block text-light font-small">&nbsp;</span>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- End of Pricing Card -->
            </div>
        </div>
      </div>
    </section>
@include('layouts.homelayouts.partners')

    
  @include('layouts.homelayouts.footer')
@include('layouts.homelayouts.scripts')
  </body>
</html>