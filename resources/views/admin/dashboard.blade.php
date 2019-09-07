

@extends('layouts.adminlayout')

@section('content')
    
   
 
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
     <div class="container">
            @include('inc.alerts')
       </div>
                
       <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Recently Added Orders</h4>
                    </div>
                    <div class="comment-widgets scrollable">
                       <?php $a = 0; ?>

                        {{--  here the orders list start  --}}
                        @if(count($orders) > 0 )

                        @foreach($orders as $od)
                        <?php $a = $a+1; ?>

                        @if($a < 4)
                        <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">{{$od->username}} </br></br> Mobile {{$od->phone}}</h6>  <a href="orders/{{$od->order_id}}/edit" class="float-right">Update</a>  
                                    <span class="m-b-15 d-block">Booked <h3> {{$od -> service}}</h3>
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
                            @endif

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

