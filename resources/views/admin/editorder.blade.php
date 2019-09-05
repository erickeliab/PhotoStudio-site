
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
                <h5>Add Order</h5>
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

           {!! Form::open(['method' => 'post', 'action' => ['OrdersController@update',$od->order_id]]) !!}
           <div class="row well">
             <div class="col-md-6 container">
                  
              <div class="col-md-12 form-group">
                    {!! Form::label('name', 'Name of the customer', []) !!}
                    {{Form::text('name',$od->username, ['class' => 'form-control' , 'placeholder' => 'name'])}}
                  
               </div>
               
               
                
               <div class="col-md-12 form-group">
                   
                   {!! Form::label('phone', 'phone', []) !!}
                   
                    {{Form::text('phone',$od->phone, ['class' => 'form-control' , 'placeholder' => 'phone'])}}
                  
               </div>
               <div class="col-md-12 form-group">
                    {!! Form::label('date', 'Date', []) !!}
                    <div class="input-group">
                    
                    
                     {{Form::text('date',$od->ocdate, ['class' => 'form-control' , 'placeholder' => 'mm/dd/yyyy','id'=>'datepicker-autoclose'])}}
                     <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                     </div>
                    </div>
                </div>
              
                <div class="col-md-12 form-group">
                        {!! Form::label('service', 'Service', []) !!}
                        {!! Form::select('service', ['B'=>'Birthdays','G'=>'Graduations','A'=>'Anniversary','S'=>'Baby Shower','E'=>'Engagement','S'=>'Suprises','H'=>'Holydays'], null) !!}
                      
                   </div>
               
             
               <div class="col-md-6 form-group">
                    {{Form::hidden('_method','PUT')}}
                  

                       {!! Form::submit('UPDATE', ['class' => 'btn btn-primary']) !!}
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
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
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
    
