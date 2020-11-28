@include('layouts.homelayouts.header')
    <div class="p-header-bg" style="background-image: url('http://localhost/webtech/public/assets/home/images/banner.png'); height: 432px">
      <!-- Navigation -->
     
      
      <header>
        <div class="container header-content">
            <div class="header-content-inner text-white text-center">
              <h1>Blog</h1>
              <div class="form-for-seach">
                <form role="search" method="get" class="search-form" action="">
                    <p class="search "><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <i class="fas fa-search"></i> --><input type="search" class="search-field" placeholder="Search Article" value="" name="s" title="Search for:"></p>
                </form>
              </div>
            </div>
        </div>
      </header>
    </div>
    @if(isset($blog))
    <section id="main" class="mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="single-post">
              <h1 class="title-for-post">{{$blog->title}}: What to Look For?
</h1>
              <div class="row getpostmeta">
                <div class="col-md-4">
                  <p class="authorr"><svg class="svg-inline--fa fa-user-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"></path></svg><!-- <i class="fas fa-user-alt"></i> -->{{$blog->author}}</p>
                </div>
                <div class="col-md-4">
                  <p class="adte"><svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg><!-- <i class="far fa-clock"></i> -->{{date_format($blog->updated_at,'M d, Y')}}</p>
                </div>
                <div class="col-md-4">
                  <p class="share"><svg class="svg-inline--fa fa-share-alt fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z"></path></svg><!-- <i class="fas fa-share-alt"></i> -->Share</p>
                  
                </div>
              </div>
              <div class="featureimage">
                  <img src="{{url('images/blogs/'.$blog->image)}}" alt="Best LMS Development Features: What to Look For?" class="img-responsive"></div>
                <div class="content">
                   
                </div>
              </div>
            <div class="commentsection">
              <div class="comments-area">
                <div id="respond" class="comment-respond">
                  <h3 id="reply-title">Leave a Reply<small><a id="cancel-comment" href="#">Cancel reply</a></small></h3>

                  <form action="" method="post" id="commentform" class="comment-form" novalidate="">

                    <p>
                      <span id="email-notes">Your email address will not be published.</span>Required fields are marked<span class="required">*</span>
                    </p>

                    <p class="comment-form">
                      <label for="comment">Comment</label>
                      <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" placeholder="Write a Comment..." spellcheck="false"></textarea>
                    </p>

                    <p class="comment-form-author">
                      <label for="author">Name <span class="required">*</span></label>
                      <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
                    </p>

                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                    </p>

                    <p class="comment-form-url">
                      <label for="url">Website</label>
                      <input id="url" name="url" type="url" value="" size="30" maxlength="200">
                    </p>

                    <p class="comment-form-cookies">
                      <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                      <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                    </p>

                    <p class="form-submit">
                      <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                      <input type="hidden" name="comment_post_ID" value="4545" id="comment_post_ID">
                      <input type="hidden" name="comment_parent" id="comment_parent" value="0"> 
                    </p>

                  </form>
                </div>
                <!-- #respond -->
              </div>
              <!-- #comments -->
              <div class="afterblog">
                <div role="form" class="afterblog-form">
                  <form action="" method="post" class="form init" novalidate="novalidate">
                    <div class="row">
                      <div class="col-md-5 col-sm-12">
                        <picture class="imagenewsletter"> 
                          <img src="https://invozone.com/wp-content/uploads/2020/04/Blogsj.png"> 
                        </picture>
                      </div>
                      <div class="col-md-7 col-sm-12">
                        <h2><b>Subscribe </b>to Our Newsletter </h2>
                        <div class="inuts">
                          <input type="text" name="your-name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Name">
                          <br> 
                          <input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email Address"> 
                        </div>
                        <div class="sec">
                          <input type="submit" value="Subscribe"></div>
                        <p></p>
                      </div>
                    </div>
                    <div class="response-output" role="alert" aria-hidden="true"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    

@include('layouts.homelayouts.partners')



  <!-- fixed navbar -->
@include('layouts.homelayouts.footer')
@include('layouts.homelayouts.scripts')
  </body>
</html>