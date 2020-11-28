
   @include('layouts.homelayouts.header')
    <div class="p-header-bg" style="background-image: url('assets/home/images/banner.png'); height: 432px">
      <!-- Navigation -->
     
      </nav>
      
      <header>
        <div class="container header-content">
            <div class="header-content-inner text-white text-center">
              <h1>Portfolio</h1>
              <p>Some of our Work... </p>
            </div>
        </div>
      </header>
    </div>

    <section id="portfolio" class="quick-link_1349">
      <div class="container">
        <div class="col-lg 12 col-md-12">
          <h5 class="sm-blue-heading">// PORFOLIO</h5>
          <h2 class="smh">Our Featured Works</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 text-right">
            <div class="portfolioFilter">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".creative">Creative</a>
              <a href="#" data-filter=".design">Design</a>
              <a href="#" data-filter=".web">Web</a>
              <a href="#" data-filter=".apps">Apps</a>
            </div>
          </div>
          <div class="portfolioContainer">
            <div class="portfolio-item col-lg-4 col-md-4 col-sm-12 creative design">
              <img src="{{ url('assets/home/images/portfolio/1(2).png')}}" class="img img-responsive">
            </div>
            <div class="portfolio-item col-lg-8 col-md-8 col-sm-12 creative web">
              <img src="{{ url('assets/home/images/portfolio/2(2).png')}}" class="img img-responsive">
            </div>
            <div class="portfolio-item col-md-4 col-sm-12 creative apps">
              <img src="{{ url('assets/home/images/portfolio/3(2).png')}}" class="img img-responsive">
            </div>
            <div class="portfolio-item col-md-4 col-sm-12 design web">
              <img src="{{ url('assets/home/images/portfolio/4(2).png')}}" class="img img-responsive">
            </div>
            <div class="portfolio-item col-md-4 col-sm-12 design apps">
              <img src="{{ url('assets/home/images/portfolio/5(2).png')}}" class="img img-responsive">
            </div>
          </div>
        </div>
      </div>
      <div id="about-button" class="blue-btn d-block">
        <a href="#" class="btn btn-outline-primary mx-auto my-3">Load More</a>
      </div>
    </section>

@include('layouts.homelayouts.partners')



  <!-- fixed navbar -->
@include('layouts.homelayouts.footer')
@include('layouts.homelayouts.scripts')

  </body>
</html>