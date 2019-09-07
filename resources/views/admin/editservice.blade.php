
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
                <h5>Update This Service</h5>
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container"> @include('inc.alerts')
                    </div>
                    <hr>
                <div class="container">
                        <div class="col-md-12 form-group">
                {{--  BEGINING OF THE FORM  --}}

           {!! Form::open(['method' => 'post', 'action' => ['ServicesController@update',$services->service_id],'enctype' => 'multipart/form-data']) !!}
           <div class="row">
             <div class="col-md-6 container">
                  
              <div class="col-md-12 form-group">
                    {!! Form::label('service_name', 'Service', []) !!}
                    {{Form::text('name',$services->serv_name, ['class' => 'form-control' , 'placeholder' => $services->serv_name])}}
                  
               </div>
               <div class="col-md-12 form-group">
                   
                   {!! Form::label('price', 'Price', []) !!}
                   
                    {{Form::text('price',$services->price, ['class' => 'form-control' , 'placeholder' => $services->price])}}
                  
               </div>
               <div class="col-md-12 form-group">
                    {!! Form::label('serv_descr', 'Description', []) !!}
                    {{Form::textarea('serv_descr',$services->serv_descr, ['class' => 'form-control' , 'placeholder' => $services->serv_descr])}}
               </div>
               <div class="col-md-6 form-group">
                    {{Form::hidden('path',$services->imagepath, ['class' => 'form-control' , 'placeholder' => $services->price])}}
                    {!! Form::file('CoverImage') !!}
                    {{Form::hidden('_method','PUT')}}
                       {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                </div>
             </div>

             <div class="col-md-6 container">
                  
                   
                    <p class="mb-5"><img src="{{URL::asset('storage/CoverImages/'.$services->imagepath)}}" alt="" class="img-fluid"></p>
                             
                                   
                        
                   </div>
           </div>
              

               <div class="well text-center container col-md-12">
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['ServicesController@destroy',$services->service_id],'class' => 'pull-right']) !!}
                                
            {!! Form::submit('DELETE THIS  SERVICE', ['class' => 'btn btn-danger']) !!}
           {!! Form::close() !!}
                                
              </div>


           {{--  EBD OF THE FORM  --}}
                    
               </div>
                </div>     
                       </div>
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      
    </div>
  @endsection  
    
