
<footer>
        <div class="container">
          <div class="row">
            <h2 class="sm-blue-heading ml-lg-4" id="footer-heading">//NEED SOLUTION- CONTACT US</h2>
            <div class="col-lg-6 col-md-6 col-sm-12 text-white footer-info">
              <div id="address" class="my-3">
                <div class="icon"><a href="#"><img src="{{ url('assets/home/images/location.png')}}"></a></div>
                <div class="text">
                  <h5>Main Office</h5>
                  <h6>{{$email=App\Preference::where('name','adress')->pluck('value')->first()}}</h6>
                </div>
              </div>
              <div id="mail" class="my-3">
                <div class="icon"><a href="#"><img src="{{ url('assets/home/images/mail.png')}}"></a></div>
                <div class="text">
                  <h5>Write Us</h5>
                  <h6>{{$email=App\Preference::where('name','email')->pluck('value')->first()}}</h6>
                </div>
              </div>
              <div id="phone" class="my-3">
                <div class="icon"><a href="#"><img src="{{ url('assets/home/images/phone.png')}}"></a></div>
                <div class="text">
                  <h5>Give us a call</h5>
                  <h6>{{$phone=App\Preference::where('name','telephone')->pluck('value')->first()}}</h6>
                </div>
              </div>
              <div id="social-media" class="my-3">
                <div class="icon"><a href="#"><img src="{{ url('assets/home/images/socail_media.png')}}"></a></div>
                <div class="text">
                  <h5>Stay Connected</h5>
                  <a href="{{$facebook=App\Preference::where('name','facebook_link')->pluck('value')->first()}}"><img src="{{ url('assets/home/images/fb.png')}}"></a>
                  <a href="{{$instagram=App\Preference::where('name','instagram_link')->pluck('value')->first()}}"><img src="{{ url('assets/home/images/instagram.png')}}"></a>
                  <a href="{{$twitter=App\Preference::where('name','twitter_link')->pluck('value')->first()}}"><img src="{{ url('assets/home/images/twitter.png')}}"></a>
                  <a href="{{$linkdin=App\Preference::where('name','linkedin_link')->pluck('value')->first()}}"><img src="{{ url('assets/home/images/linkdin.png')}}"></a>
                  <a href="{{$pintrest=App\Preference::where('name','pinterest_link')->pluck('value')->first()}}"><img src="{{ url('assets/home/images/pintrest.png')}}"></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
          
                <form id="contact-form" name="contact-form" action="{{url('save-contacts')}}" method="POST">
                  {{csrf_field()}}
                    <h3 class="font-weight-bold text-center text-uppercase mb-lg-3">get in touch</h3>
                    <!--Grid row-->
                    <div class="row">
                       <div class="col-md-12 col-sm-12">
                        @include('home.partials.message')
                      </div>
                        <!--Grid column-->
                        <div class="col-md-6 col-sm-12">
                            <div class="md-form mb-0">
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}" required="required">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 col-sm-12">
                            <div class="md-form mb-0">
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" required="required">
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
                            <textarea type="text" id="message" name="message" rows="6" cols="6"  ></textarea>
                          </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="text-center form-send-btn blue-btn text-white mt-lg-3">
                      <a class="btn btn-primary" href="javascript:;" onclick="submit()">Send Us</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </footer>
      <script type="text/javascript">
        function submit() {
          $('#contact-form').submit();
        }
      </script>