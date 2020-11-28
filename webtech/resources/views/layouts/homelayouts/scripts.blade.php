 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{ url('assets/home/vendor/js/slick.min.js')}}"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script type="text/javascript" src="{{ url('assets/home/js/jquery.hislide.min.js')}}" ></script>
 <script type="text/javascript">
    
    if($(window).width() >= 1200){
        $(document).scroll(function () {
          var $nav = $("#navbar");
          var $logosrc = $(".imglogo");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
          $logosrc.attr("src","images/blue-logo.png");
          if ($(this).scrollTop() < $nav.height() ) {
            $logosrc.attr("src","images/white-logo.png");
            $logosrc.css("width", "200px");
          }else{
          $logosrc.css("width", "160px"); 
          // $nav.css("margin-top", "10px");
          }
        });
    }
      
  </script>
  <script>
    $('.testimonial-img-slides').hiSlide();
  </script>

  <script type="text/javascript">

    $(document).ready(function(){
      $('.clients').slick({
       
          slidesToShow: 5,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: true,
          infinite: true,
          responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 5,
                  slidesToScroll: 1,
              }
          },

          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 4,
                  slidesToScroll: 1,
              }
          }, {
              breakpoint: 520,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
              }
          }]
      });
  });

  </script>

  <script>
    AOS.init();
  </script>
