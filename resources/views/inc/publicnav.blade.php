<nav class="navbar navbar-expand-md navbar-default bg-secondary fixed-top" style="margin-top:-6px; padding-bottom:-6px; margin-bottom:-12px;">
        <div class="container">
          <a class="navbar-brand" href="index.html"></a>
          <div class="navbar-left">
               
                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                <a href="#" class="p-2"><span class="bg-dander fa fa-facebook"></span></a>
              
                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
         
                </div>
          

          <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              
            </ul>
            <div class="navbar-right">
           
              <small class="text-white">0754111000 callUs</small>
            </div>
            
          </div>
        </div>
      </nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="margin-top:28px;">
        <div class="container">
          <a class="navbar-brand" href="#">PHOTOSHOOT</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <li class="nav-item active">
                            <a class="nav-link" href="{{URL::asset('/')}}">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="{{URL::asset('/servicez')}}">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="{{URL::asset('/booking')}}">Book Now</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="{{URL::asset('/about')}}">About</a>
                          </li>
                          <li class="nav-item">
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
                        <a class="dropdown-item text-dark" href="{{ URL::asset('/dashboards') }}">  {{ __('Dashboard') }}</a>

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