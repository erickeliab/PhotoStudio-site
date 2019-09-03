
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
         
        <!-- END OF THE NAVIGATION BAR -->
      
        <div class="page-wrapper">
          
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Services</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Log Out</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('inc.board')    
                <hr>
                <h5>All the services</h5>
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container"> @include('inc.alerts')
                    </div>
                    <hr>
                <div class="container">
                   
                {{--  BEGINING OF THE FORM  --}}

           {!! Form::open(['method' => 'put', 'action' => ['OrdersController@store']]) !!}
           <div class="row">
             <div class="col-md-6 form-group">
                  
                   {{Form::text('name','', ['class' => 'form-control' , 'placeholder' => 'Your name'])}}
             </div>
           
             <div class="col-md-6 form-group">
                  
                   {{Form::text('phone','', ['class' => 'form-control' , 'placeholder' => 'Phone'])}}
                </div>
                </div>
                <div class="row">
               <div class="col-md-6 form-group">
                             
                     {{Form::text('name','', ['class' => 'form-control' , 'placeholder' => 'Your name'])}}
              </div>
                      
              <div class="col-md-6 form-group">
                             
                  {{Form::text('phone','', ['class' => 'form-control' , 'placeholder' => 'Your Phone'])}}
             </div>
             </div>
                   
             
               <div class="row">
               <div class="col-md-6 form-group">
                      {!! Form::submit('Send Message', ['class' => 'btn btn-primary']) !!}
               </div>
               </div>
            {!! Form::close() !!}

           {{--  EBD OF THE FORM  --}}
                    

                </div>     
                       </div>
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      
    </div>
  @endsection  
    
