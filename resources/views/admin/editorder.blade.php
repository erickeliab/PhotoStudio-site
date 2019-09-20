
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
                    <div class="card container">
                            <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            
                            
                                        <div class="well container" style="padding:20px;">
                {{--  BEGINING OF THE FORM  --}}

           {!! Form::open(['method' => 'post', 'action' => ['OrdersController@update',$od->order_id], "class"=>"col-md-12"]) !!}
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
                <?php 
                //importing the Service model 
                use App\Service;
                $a = [];
                $records = Service::all();
                $svc = array();
                foreach($records as $record){
                    //create key 
                 $key = $record->serv_key;
                 $value = $record->serv_name;
 
                 $a[$key] = $value;
                  
                }
                ?>
              
                <div class="col-md-12 form-group">
                        {!! Form::label('service', 'Service', []) !!} <br>
                        {!! Form::select('service', $a, null,['class' => 'text-center col-md-12 col-lg-12 col-sm-12']) !!}
                      
                   </div>
                 
                   @if(Auth::user()->id == 1)
                   <div class="col-md-12 form-group">
                   
                        {!! Form::label('paid', 'paid', []) !!}
                        
                         {{Form::text('paid',$od->paid, ['class' => 'form-control' , 'placeholder' => 'paid'])}}
                       
                    </div>
                    @endif
             
               <div class="col-md-12 form-group">
                    {{Form::hidden('_method','PUT')}}
                  
                    <center>
                       {!! Form::submit('UPDATE', ['class' => 'btn btn-primary btn-rounded']) !!} </center>
                    </div>
                    
                    {!! Form::close() !!}
                    
                </div>
    
    
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
    
       