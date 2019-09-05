

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
                        <h4 class="page-title">Dashboard</h4>
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
                
               <div class="container">
                    @include('inc.alerts')
               </div>
                        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Booked Orders</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                               

                                {{--  here the orders list start  --}}
                                @if(count($order) > 0 )

                                @foreach($order as $od)
                                <div class="d-flex flex-row comment-row">
                                        <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                        <div class="comment-text active w-100">
                                            <h6 class="font-medium">{{$od-> username}}</h6>  <a href="orders/{{$od->order_id}}/edit" class="float-right">Update</a>  
                                            <span class="m-b-15 d-block">Booked for <h3> {{$od -> service}}</h3>
                                                 that will be held on {{$od -> ocdate}}
                                              
                                                </span>
                                           
                                            <div class="comment-footer">
                                                <span class="text-muted float-right">Received on {{$od -> created_at}}</span> 
                                                
                                                  
                                
                                {!! Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy',$od->order_id],'class' => 'pull-right']) !!}
                                
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                
                                
                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                @endif
                              
                                {{--  end of the orders list  --}}
                             
                              
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