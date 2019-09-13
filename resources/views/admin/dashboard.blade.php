

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
       <?php $a = 0; ?>
       <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body container">
                        <center> 
                        <h5 class="card-title m-b-0">Recent Orders</h5><br>
                        </center>

                    <table class="table col-md-12 col-lg-12 col-xl-12">
                          <thead>
                            <tr>
                              
                              <th scope="col" class="text-center">Order</th>
                              <th scope="col" class="text-center">Customer</th>
                             
                              <th scope="col" class="text-center">Phone</th>
                              <th scope="col" class="text-center">Date</th>
                              <th scope="col" class="text-center">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                                @if(count($orders) > 0 )

                                @foreach($orders as $od)
                                <?php $a++; ?>
                                @if($a < 4)
                                <tr>
                                        <th scope="row" class="text-center"> <a href="users/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"><h5> {{$od->service}} <br>
                                        <small>received on {{$od->created_at}}</small>
                                        
                                        </h5></a></th>
                                      
                                        <td class="text-center">{{$od->username}}</td>
                                        
                                        <td class="text-center"> {{$od->phone}} </td>

                                      <td class="text-center">  {{$od->ocdate}} </td>

                                      {!! Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy',$od->order_id],'class' => 'pull-right']) !!}
                        
                                    <td class="text-center">
                                            
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            
                                            
                                            
                                    </td>
                                    {!! Form::close() !!}
                                       
                                      </tr>
                                      @endif
                                @endforeach
                                     @endif
                                    
                            
                          </tbody>
                    </table>
                </div>
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

