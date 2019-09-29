<nav class="navbar navbar-expand-md navbar-default bg-secondary fixed-top" style="margin-top:-6px; padding-bottom:-6px; margin-bottom:-12px;">
        <div class="container">
          <a class="navbar-brand"></a>
          <div class="navbar-left">
               
                <a href="#" class="p-2"><span class="text-danger fa fa-twitter"></span></a>
                <a href="#" class="p-2"><span class="text-danger fa fa-facebook"></span></a>
              
                <a href="#" class="p-2"><span class="text-danger fa fa-instagram"></span></a>
         
                </div>
          

          <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              
            </ul>
            <div class="navbar-right">
           
              <small class="text-white">+255 754 111 000 </small>
            </div>
            
          </div>
        </div>
      </nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="margin-top:28px;">
        <div class="container">
          <span class="logo-text">
                 
            <img src="{{URL::asset('storage/CoverImages/logoo1.png')}}" style="" alt="logo" />
            
        </span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php 
          $servicez = Request::is('servicez') ? 'active' : '';
          $booking = Request::is('booking') ? 'active' : '';
          $home = Request::is('/') ? 'active' : '';
          $about = Request::is('about') ? 'active' : '';
          $contact = Request::is('contact') ? 'active' : '';
          $gallery = Request::is('galleryhome') ? 'active' : '';
          ?>
          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <li class="nav-item ">
                            <a class="nav-link {{$home}}" href="{{URL::asset('/')}}">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{$servicez}}"  href="{{URL::asset('/servicez')}}">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{$booking}}"  href="{{URL::asset('/booking')}}">Book Now</a>
                          </li>
                          <li class="nav-item {{$about}}">
                            <a class="nav-link"  href="{{URL::asset('/about')}}">About</a>
                          </li>
                          <li class="nav-item {{$gallery}}">
                              <a class="nav-link"  href="{{URL::asset('/galleryhome')}}">Gallery</a>
                            </li>
                          <li class="nav-item {{$contact}}">
                            <a class="nav-link"  href="{{URL::asset('/contact')}}">Contact Us</a>
                          </li>
                                          
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          
        @else
        <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-dark" href="{{ route('login') }}">  {{ __('Dashboard') }}</a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Log Out') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
             
              </li>
            </ul>
            
          </div>
        </div>
      </nav>