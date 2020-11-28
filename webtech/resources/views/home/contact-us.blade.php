@include('layouts.homelayouts.header')
    <div class="p-header-bg" style="background-image: url('assets/home/images/banner1.jpg'); height: 432px">
      <!-- Navigation -->
     
      
      <header id="contact_us">
        <div class="container">
          <div class="header-content">
            <div class="header-content-inner text-white text-center">
              <h1>Contact us</h1>
              <p>Want to get in touch?</p>
            </div>
          </div>
            
        </div>
      </header>
    </div>

    <section id="contact">
      <div class="container my-5" style="position: relative;">
        <div class="row bg-white p-lg-4 contact">
          <div class="col-md-6 col-sm-12 mb-lg-5">
            <h2 class="mont25black">Contact Us</h2>
            <div id="contact-info">
              <div class="address">
                <img class="mr-md-2" src="{{ url('assets/home/images/contact_us/address.png')}}">
                <span>{{$email=App\Preference::where('name','adress')->pluck('value')->first()}}</span>
              </div>
              <div class="email">
                <img class="mr-md-2" src="{{ url('assets/home/images/contact_us/email.png')}}">
                <span>{{$email=App\Preference::where('name','email')->pluck('value')->first()}}</span>
              </div>
              <div class="phone">
                <img class="mr-md-2" src="{{ url('assets/home/images/contact_us/phone.png')}}">
                <span>{{$phone=App\Preference::where('name','telephone')->pluck('value')->first()}}</span>
              </div>
            </div>
            <div id="social-links">
                <div class="col-md-2 col-sm-12 pt-lg-4">
                  <a href="{{$facebook=App\Preference::where('name','facebook_link')->pluck('value')->first()}}"><img class="mb-1" src="{{ url('assets/home/images/contact_us/fb.png')}}"></a>
                  <a href="{{$twitter=App\Preference::where('name','twitter_link')->pluck('value')->first()}}"><img class="mb-1" src="{{ url('assets/home/images/contact_us/twitter.png')}}"></a>
                  <a href="{{$instagram=App\Preference::where('name','instagram_link')->pluck('value')->first()}}"><img class="mb-1" src="{{ url('assets/home/images/contact_us/instagram.png')}}"></a>
                  <a href="{{$linkdin=App\Preference::where('name','linkedin_link')->pluck('value')->first()}}"><img class="mb-1" src="{{ url('assets/home/images/contact_us/linkdin.png')}}"></a>
                  <a href="{{$pintrest=App\Preference::where('name','pinterest_link')->pluck('value')->first()}}"><img src="{{ url('assets/home/images/contact_us/pintrest.png')}}"></a>
                </div>
                <div class="col-md-8 col-sm-12">
                  <img src="{{ url('assets/home/images/contact_us/contact_img.png')}}" class="img-fluid">
                </div>
              </div>
          </div>
           
          <div class="col-md-6 mb-lg-5">
             <form id="contact-form"  class="t40" name="contact-form" action="{{url('save-contacts')}}" method="POST" style="position: relative;">
              {{csrf_field()}}
                  <h3 class="font-weight-bold text-center text-uppercase mb-lg-3">SEND US A MESSAGE</h3>
                  <!--Grid row-->
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                     @include('home.partials.message')
                   </div>
                      <!--Grid column-->
                      <div class="col-md-6 col-sm-12">
                          <div class="md-form mb-0">
                               <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}" required>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6 col-sm-12">
                          <div class="md-form mb-0">
                              <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" required>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6 col-sm-12">
                          <div class="md-form mb-0">
                             <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" value="{{old('phone')}}" required="required">
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6 col-sm-12">
                          <div class="md-form mb-0">
                               <input type="email" id="email" name="email" class="form-control" placeholder="email" value="{{old('email')}}" required="required">
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12 col-sm-12">
                          <div class="md-form mb-0">
                               <input type="text" id="subject" name="subject" class="form-control" placeholder="Writing for?" value="{{old('subject')}}" required="required">
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12 col-sm-12">

                        <div class="md-form">
                          <label for="message">Message</label>
                          <textarea type="text" id="message" name="message" rows="6" cols="6"></textarea>
                        </div>

                      </div>
                  </div>
                  <!--Grid row-->
                  <div class="text-center form-send-btn blue-btn text-white mt-lg-3">
                    <a class="btn btn-primary" href="javascript:;" onclick="formSubmit()" >Send Us</a>
                  </div>
              </form>

            </div>
          <div class="col-md-12 mt-lg-5"></div>
          <div class="col-md-10 p-4 schedule_call">
              <h6 class="text-white">Have an idea to discuss?</h6>
              <h3 class="text-white">Schedule a free 30 mins call</h3>
              <div class="col-md-4 col-sm-12 ml-lg-4 mt-4">
                <div class="sc-form mb-0">
                    <input type="text" id="f_name" name="f_name" class="form-control" placeholder="First Name">
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-4 col-sm-12 mt-4">
                <div class="sc-form mb-0">
                    <input type="text" id="l_name" name="l_name" class="form-control text-white" placeholder="Last Name">
                </div>
              </div>
              <div class="col-md-3 col-sm-12 mt-4">
                <a href="#"><button type="button" class="btn btn-outline-light rounded-pill">Schedule call</button></a>
              </div>
          </div>
        </div>
        <img src="{{ url('assets/home/images/contact_us/contct-us-vector.png')}}" class="contct-us-vector">
      </div>
    </section>



 @include('layouts.homelayouts.partners')

    
  @include('layouts.homelayouts.footer')
@include('layouts.homelayouts.scripts')
<script type="text/javascript">
  function formSubmit() {
    $('#contact-form').submit();
  }
</script>
  </body>
</html>