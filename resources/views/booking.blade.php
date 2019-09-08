
@extends('layouts.adminlayout')

@section('content')

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
 
    <div id="main-wrapper">
       
      
                @include('inc.publicnav')
       
        <hr>
           <!-- HERE GOES THE SIDE BAR THAT NAVIGATES TO OTHER ADNMIN PAGES -->
              
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav fixed">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                    <li class="sidebar-item sidebar-link waves-effect waves-dark sidebar-link"> BOOK THE SERVICE</li>

                            </li>
                          
                        @else
                        
                       
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/dashboard')}}" aria-expanded="false"><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders')}}"aria-expanded="false"><span class="hide-menu">Orders</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/services')}}"  aria-expanded="false"><span class="hide-menu">Services</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/messages')}}" aria-expanded="false"></i><span class="hide-menu">Messages</span></a></li>
                        @if(Auth::user()->id == 1)
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/users')}}" aria-expanded="false"><span class="hide-menu">Users</span></a></li>
                        @endif
                        <hr>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('services/create')}}" aria-expanded="false"><span class="hide-menu">Add Service</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders/create')}}" aria-expanded="false"><span class="hide-menu">Add Order</span></a></li> 
                        @if(Auth::user()->id == 1)
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/aduser')}}" aria-expanded="false"><span class="hide-menu">Add User</span></a></li> 
                        @endif
                        <hr>   <li  class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                  </li>
                    </ul>
               h

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        
                            @endguest

                    
          </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
      
        <!-- END OF THE NAVIGATION BAR -->
      
        <div class="page-wrapper">
          
           
           
            
           
                <hr>
                <br><br>
                <center>
                <h5>PRESS YOUR ORDER</h5>
                </center>
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container"> @include('inc.alerts')
                    </div>
                    <hr>
                <div class="container">
                        <div class="col-md-12 form-group ">
                {{--  BEGINING OF THE FORM  --}}

           {!! Form::open(['method' => 'post', 'action' => ['bookingsController@add']]) !!}
           <div class="row well">
             <div class="col-md-6 container">
                  
              <div class="col-md-12 form-group">
                    {!! Form::label('name', 'Name of the customer', []) !!}
                    {{Form::text('name','', ['class' => 'form-control' , 'placeholder' => 'name'])}}
                  
               </div>
               
               
                
               <div class="col-md-12 form-group">
                   
                   {!! Form::label('phone', 'phone', []) !!}
                   
                    {{Form::text('phone','', ['class' => 'form-control' , 'placeholder' => 'phone'])}}
                  
               </div>
               <div class="col-md-12 form-group">
                    {!! Form::label('date', 'Date', []) !!}
                    <div class="input-group">
                    
                    
                     {{Form::text('date','', ['class' => 'form-control' , 'placeholder' => 'mm/dd/yyyy','id'=>'datepicker-autoclose'])}}
                     <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                     </div>
                    </div>
                </div>
              
                <div class="col-md-12 form-group">
                        {!! Form::label('service', 'Service', []) !!}
                        {!! Form::select('service', ['B'=>'Birthdays','G'=>'Graduations','A'=>'Anniversary','S'=>'Baby Shower','E'=>'Engagement','S'=>'Suprises','H'=>'Holydays'], 'G') !!}
                      
                   </div>
               
             
               <div class="col-md-6 form-group">
                   

                       {!! Form::submit('ADD ORDER', ['class' => 'btn btn-primary']) !!}
                </div>
             </div>

             <div class="col-md-6 container">
                  
                   
                    {{-- <p class="mb-5"><img src="{{URL::asset('assets/images/big/img1.jpg')}}" alt="" 'class'=>"img-fluid"></p> --}}
                             
                                   
                        
                  
                </div>
           </div>
     
           {{--  EBD OF THE FORM  --}}
                    
               </div>
                </div>     
                       </div>
          
            <footer class="footer">
               
          
            </footer>
          
        </div>
      <script>
            jQuery('.mydatepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
      </script>
    </div>
  @endsection  
    
