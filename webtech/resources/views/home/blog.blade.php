@include('layouts.homelayouts.header')
    <div class="p-header-bg" style="background-image: url('assets/home/images/banner.png'); height: 432px">
      <!-- Navigation -->

      
      <header>
        <div class="container header-content">
            <div class="header-content-inner text-white text-center">
              <h1>Blog</h1>

              <p>Catch top stories, Stay updated with trend.</p>
              <div class="form-for-seach">
                <form role="search" method="get" class="search-form" action="">
                    <p class="search "><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <i class="fas fa-search"></i> --><input type="search" class="search-field" placeholder="Search Article" value="" name="s" title="Search for:"></p>
                </form>
              </div>
            </div>
        </div>
      </header>
    </div>

    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <aside id="secondary" class="widget-area" role="complementary" aria-label="Blog Sidebar">
              <section id="categories-4" class="widget widget_categories">
                <h2 class="widget-title">Topics</h2>
                <ul>
                  @
                  <li class="cat-item cat-item-51 text-left">
                    <a href="#">Applications &amp; Software</a>
                  </li>
                  <li class="cat-item cat-item-36">
                    <a href="#">Creative</a>
                  </li>
                  <li class="cat-item cat-item-29">
                    <a href="#">Custom Software</a>
                  </li>
                  <li class="cat-item cat-item-11">
                    <a href="#">E-Commerce</a>
                  </li>
                    <li class="cat-item cat-item-95">
                      <a href="#">Education</a>
                  </li>
                    <li class="cat-item cat-item-84">
                      <a href="#">Finance</a>
                  </li>
                    <li class="cat-item cat-item-43">
                      <a href="#">Food &amp; Grocery</a>
                  </li>
                    <li class="cat-item cat-item-33">
                      <a href="#">Healthcare</a>
                  </li>
                    <li class="cat-item cat-item-13">
                      <a href="#">Home Service Apps</a>
                  </li>
                </ul>

              </section>
            </aside><!-- #secondary -->
          </div>
        </div>
         @if(isset($last_blog)) 
          <div class="topsection">
        <div class="row">
            <div class="col-md-8 col-sm-12">
              <div class="recentpost">
                <a href="#">
                  <img src="{{url('images/blogs/'.$last_blog->image)}}" alt="" style="width: 100%; height: 500px;"> 
                </a>
                <div class="destis">    
                  <div class="shadw">  
                    
                    <p class="post-title"><a href="#">{{$last_blog->title}}</a></p>
                    <div class="deiatis">
                      <p class="autho">
                        <svg class="svg-inline--fa fa-user-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"></path>
                        </svg>
                        <!-- <i class="fas fa-user-alt"></i> --><span class="entry-date">{{$last_blog->author}}</span></p>
                      <p class="autoho">
                        <svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                        </svg>
                        <!-- <i class="far fa-clock"></i> --><span class="entry-date">{{date_format($last_blog->updated_at,'M d, Y')}}</span></p>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="susbs">
                <div role="form">
                  <form action="" method="post" class="wpcf7-form init">
                    <div class="cons">
                      <picture class="">
                        <img src="https://invozone.com/wp-content/uploads/2020/04/Newsletter.png" class="img-responsive"> 
                      </picture>
                      <p></p>
                      <h2><b>Subscribe</b> to our Newsletter</h2>
                      <p></p>
                    </div>
                    <div class="son">
                      <input type="text" placeholder="Name" name="name" required="">
                      <br>
                      <span class="email"><input type="email" name="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Email Address"></span> 
                    </div>
                    <div class="sec">
                      <input type="submit" value="Subscribe"> 
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        </div>
        <div id="main"> 
          <div class="blog-parent row">
            @if(isset($blogs))
            @foreach($blogs as $blog)
            <div class="col6 col-md-3 col-sm-12 col-xs-12">
              <div class="content-post-inner">
                <a href="blog_detail.html">
                 <img src="{{url('images/blogs/'.$blog->image)}}" class="img-responsive">
               
                </a>
                <div class="rt-detail">
                  <h2 class="entry-title"><a href="{{url('blog-detail/'.$blog->id)}}">{{$blog->title}}</a></h2>
                  <a href="{{url('blog-detail/'.$blog->id)}}">
                    <div class="view-date">
                      <p>
                        <svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                        </svg>
                        <!-- <i class="far fa-clock"></i> --><span class="entry-date">{{date_format($blog->updated_at,'M d, Y')}}</span> </p>
                      <p>
                        <svg class="svg-inline--fa fa-user-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                          <path fill="currentColor" d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"></path>
                        </svg>
                        <!-- <i class="fas fa-user-alt"></i> --><span class="entry-date">{{$blog->author}}</span> </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
        
       
        </div>
      </div>
    </section>
@include('layouts.homelayouts.partners')



  <!-- fixed navbar -->
@include('layouts.homelayouts.footer')
@include('layouts.homelayouts.scripts')

  </body>
</html>