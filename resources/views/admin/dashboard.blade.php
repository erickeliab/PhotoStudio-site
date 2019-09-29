

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
                        @if(count($order) > 0 )
                        <div class="table-responsive">
                            <table class="table col-md-12 col-lg-12 col-xl-12">
                                  <thead>
                                    <tr>
                                      
                                      <th scope="col" class="text-center">Event Type</th>
                                      <th scope="col" class="text-center">Customer Name</th>
                                     
                                      <th scope="col" class="text-center">Phone</th>
                                     
                                      <th scope="col" class="text-center">Date</th>
                                      <th scope="col" class="text-center">Status</th>
                                      <th scope="col" class="text-center">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      

                                        @foreach($order as $od)
                                        <tr>
                                                <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"> {{$od->service}} 
                                              
                                                
                                                </a></th>
                                              
                                                <td class="text-center">{{$od->username}}</td>
                                                
                                                <td class="text-center"> {{$od->phone}} </td>

                                        
    
                                              <td class="text-center">  {{$od->ocdate}} </td>
                                              <td class="text-center">
                                                @if($od->approved == '1')
                                                <span class="text-success text-center">Approved</span>
                                                @elseif ($od->approved == 'new')

                                                <span class="text-warning text-center">New </span>
                                                @else
                                                <span class="text-danger text-center">Not Approved</span>
                                                
                                                
                                          
                                                @endif
                                              </td>
                                              

                                
                                            <td class="text-center">
                                                <a href="{{URL::asset('orders/'.$od->order_id)}}" class="text-center btn btn-secondary btn-rounded text-black">Open File</a>
                                                    
                                                    
                                            </td>
                                       
                                               
                                              </tr>
                                        @endforeach
                                            
                                            
                                    
                                  </tbody>
                            </table>
                        </div>
                        @else 
                        <div class="container well col-md12">
                            <h3 class="text-warning">Ooops, there is no any new order yet!</h3>
                        </div>
                        @endif
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

