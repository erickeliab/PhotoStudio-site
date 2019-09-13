

@extends('layouts.adminlayout')

@section('content')

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
 
    <div id="main-wrapper">
       
            <header class="topbar" data-navbarbg="skin5">
                    @include('inc.adminav2')
            </header>
            
             <!-- HERE GOES THE SIDE BAR THAT NAVIGATES TO OTHER ADNMIN PAGES -->
             @include('inc.admin_navbar')
            <!-- END OF THE NAVIGATION BAR -->
          
        <div class="page-wrapper">
          
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Expenditures</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{URL::asset('/')}}">Home</a></li>
                                            <li  class="breadcrumb-item">
                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                 </a>
                                              </li>
                                        </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
           
            @include('inc.board')
                <div class="container">
                        @include('inc.alerts')
                    </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Manage the income split</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      
                                      <th scope="col">Name</th>
                                      <th scope="col">Email and Phone</th>
                                     
                                      <th scope="col"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     
                                      
                                            
                                    
                                  </tbody>
                            </table>
                   
                        </div>
                    </div>
                </div>
 
                   </div>
      
        <footer class="footer text-center">
            <p>PHOTOSHOOT ADMIN CMS</p>
        </footer>
      
    </div>
  
</div>

@endsection