
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
                <h5>All the services</h5>
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container"> @include('inc.alerts')
                    </div>
                    <hr>
                <div class="row el-element-overlay">
                   
                    {{--  VIEWING THE SERVICES FROM THE DATABASE  --}}

                    @if(count($services) > 0)
                    @foreach($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{URL::asset('storage/CoverImages/'.$service->imagepath)}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="storage/CoverImages/{{$service->imagepath}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">{{$service->serv_name}}</h4> <span class="text-muted"></span>
                                    <a href="services/{{$service->service_id}}/edit" class="">Edit</a>
                                    <hr>
                                    
                                          
                                {!! Form::open(['method' => 'DELETE', 'action' => ['ServicesController@destroy',$service->service_id],'class' => 'pull-right']) !!}
                                
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-rounded']) !!}
                                
                                
                                {!! Form::close() !!}
                                
 {{--  /opt/lampp/htdocs/app/blog/public/storage/CoverImages/vlcsnap-2019-09-01-23h11m36s6141567686834.png  --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p alert alert-primary> There are no services yet</p>

                    @endif

                    {{--  END OF SERVICES  --}}

                    

                </div>     
                       </div>
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      
    </div>
  @endsection  
    
