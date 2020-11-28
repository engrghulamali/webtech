<section id="partner-logo" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center" style="position: relative;">
              <h2 class="sm-blue-heading">//Partner & Clients</h2>
              @php
              $clients=App\Client::get();
              @endphp
              <div class="clients">
                @foreach($clients as $client)
                <div class=""><a href="{{$client->link}}"><img src="{{ asset('/images/clients/'.$client->image) }}"></a></div>
               <!--  <div class=""><img src="{{ url('assets/home/images/client2.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client3.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client4.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client5.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client1.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client2.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client3.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client4.png')}}"></div>
                <div class=""><img src="{{ url('assets/home/images/client5.png')}}"></div> -->
                @endforeach
              </div>
              <div class="partner-prev"><img src="{{ url('assets/home/images/partner-left-arrow.png')}}"></div>
              <div class="partner-next"><img src="{{ url('assets/home/images/partner-right-arrow.png')}}"></div>
            </div>
          </div>
        </div>
      </section>