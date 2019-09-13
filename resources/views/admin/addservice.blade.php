
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
                        <h4 class="page-title">Services</h4>
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
               
     
                <hr>
                <h5>Add Service</h5>
                
               
                <div class="container"> @include('inc.alerts')
                    </div>
                    <hr>

                    <div class="card container">
                            <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            
                            
                                           <div class="well container">
                                            <div class="container" style="padding:20px;">
                                                

                                           {!! Form::open(['method' => 'post', 'action' => ['ServicesController@store'], 'enctype' => 'multipart/form-data']) !!}
                                           
                                            
                                                  
                                           <div class="row form-group">
                                                 {!! Form::label('name', 'Service', []) !!}
                                                 {{Form::text('name','', ['class' => 'form-control' , 'placeholder' => 'Service name'])}}
                                               
                                            </div>
                                            <div class="row form-group">
                                                
                                                {!! Form::label('price', 'Price', []) !!}
                                                
                                                 {{Form::text('price','', ['class' => 'form-control' , 'placeholder' => 'Price'])}}
                                               
                                            </div>
                                            <div class="row form-group">
                                                 {!! Form::label('serv_descr', 'Description', []) !!}
                                                 {{Form::textarea('serv_descr','', ['class' => 'form-control' , 'placeholder' => 'Service Description'])}}
                                            </div>
                                            <div class="row form-group">
                                                 {{Form::hidden('path','assets/images/big/img1.jpg', ['class' => 'form-control' , 'placeholder' => 'GH'])}}
                                                 <br> <center>
                                                 {!! Form::file('CoverImage') !!}
                                                
                                                 
                                                 </center>
                                                    {!! Form::submit('ADD SERVICE', ['class' => 'btn btn-primary']) !!}
                                             </div>
                                             
                                             {!! Form::close() !!}
                                             
                                          </div>
                                            </div>
                                                {{--  BEGINING OF THE FORM  --}}
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
    
