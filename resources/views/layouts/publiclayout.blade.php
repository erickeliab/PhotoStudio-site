<!doctype html>
<html lang="en">
  <head>
    <title>PHOTOSHOOT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{url('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('fonts/flaticons/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script> 
        console.log('helloworld');
      function truncedText(Id,maxleght){
        let selector = document.getElementsByClassName((Id);
     
  
        let text = selector.innerText;
        if (text.lenght > maxleght){
          //do stuff
          text = text.substr(0,maxleght) + '...';
        }
        return text;
      }
      document.getElementsByClassName('para').innerText = truncedText('para',13);
   
         
      </script>
  </head>
  <body style="padding-top:70px;">
    
    <!-- navbar -->
    @include('inc.publicnav')
    
    <!-- END navbar -->

    
     
     
   
    @yield('content')
    
    <footer class="site-footer" role="contentinfo" style="padding-bottom:-20;">
      <div class="container">
        <div class="row mb-12">
          <div class="col-md-3 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
         

          </div>
          <div class="col-md-3 mb-5">
            <div class="mb-5">
              <h3>Opening Hours</h3>
              <p><strong class="d-block">24/7</strong> Simply, Everyday</p>
            </div> </div>
            <div class="col-md-3">
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block">Address:</span>
                  <span class="text-white">Mwenge, Dar es Salaam, Tanzania</span></li>
                <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+255 754 111 111</span></li>
                <li class="d-block"><span class="d-block">Email:</span><span class="text-white">info@ericktech.com</span></li>
              </ul>
            </div>
         
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="{{URL::asset('/about')}}">About</a></li>
             
              <li><a href="{{URL::asset('/contact')}}">Contact</a></li>
              <li><a href="{{URL::asset('/servicez')}}">Services</a></li>
             
              <li><a href="{{URL::asset('/booking')}}">Book Now</a></li>
            </ul>
          </div>
         
        </div>
        
      </div>
      <div class="row">
          <div class="col-12 text-md-center text-center">
            <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
       </p>
          </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

     
    <script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/magnific-popup-options.js')}}"></script>
    

    <script src="{{url('js/main.js')}}"></script>

    <script src="{{URL::asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
{{--  date picker  --}}
<script src="{{URL::asset('dist/dist/js/bootstrap-datepicker.min.js')}}"></script>
{{--  <!-- <script src="{{URL::asset('dist/js/pages/dashboards/dashboard1.js')}}"></script> -->  --}}

  </body>
</html>