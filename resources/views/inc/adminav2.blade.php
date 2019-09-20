{{--  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
       
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            
            <a class="navbar-brand" href="index.html">
              
                <b class="logo-icon p-l-10">
                 
               
                   
                </b>
              
                <span class="logo-text">
                 
                     <h5>PHOTOSHOOT</h5>
                    
                </span>
           
            </a>

            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
    
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                     <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">User</a>
                        <a class="dropdown-item" href="#">Order</a>
                        <a class="dropdown-item" href="#">Service</a>
                        
                    </div>
                </li>
               
               
            </ul>
         
          
        </div>
    </nav>  --}}
    {{--    --}}
    <nav class="navbar top-navbar navbar-expand-md navbar-dark fixed-top">
         <div class="navbar-header" data-logobg="skin5">
       
            <a class="nav-toggler waves-effect waves-light d-block d-md-none " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            
            <a class="navbar-brand" href="index.html">
              
                <b class="logo-icon p-l-10">
                 
               
                   
                </b>
              
                <span class="logo-text">
                 
                    <img src="{{URL::asset('storage/CoverImages/logoo1.png')}}" style="" alt="logo" />
                    
                </span>
           
            </a>

            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div><div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
    
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="d-none d-md-block">Add</span>
                         <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->Authority == 'admin')
                            <a class="dropdown-item" href="{{URL::asset('/aduser')}}">Add User</a>
                            @endif
                            <a class="dropdown-item" href="{{URL::asset('services/create')}}">Add Services</a>
                            <a class="dropdown-item" href="{{URL::asset('orders/create')}}">Add Order</a>                            
                        </div>
                    </li>
                   
                   
                </ul>
             
              
            {{--  </div>
            try
          <div class="container">  --}}
         
      
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                
      
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                        
                                {{--  <li class="nav-item"> <a href="{{URL::asset('/')}}" class="nav-item text-white">Home</a></li>  --}}
                            
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>
      
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
      
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
    {{--    --}}