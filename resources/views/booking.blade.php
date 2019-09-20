
@extends('layouts.adminlayout')

@section('content')

 
              
              
                

      <div class="main-wrapper  bg-white" style="margin-top:-30px;">
     
            
            @include('inc.publicnav')
 
                <div class="container"><hr>
                   
                  
                    </div>
                    <hr>
                     
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-white">
                   
                <div class=" border-top border-secondary bg-white text-dark" style="margin-top:30px; padding:30px;">
                  <center> 
                        <div class="col-md-10">
                           
                       
                                <!-- Form -->
                                {!! Form::open(['method' => 'post', 'action' => ['bookingsController@add'],'class'=>'jumbotron']) !!}
                                
                                <div class="text-center p-t-20 p-b-20">
                                        <h1 class="">ORDER HERE</h1>
                                    </div>
        
                                    <div class="text-center p-t-20 p-b-20">
                                            @include('inc.alerts')
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
                                <div class="row well ">
                                       
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
                                             {!! Form::select('service', $a, 'G',['class' => 'btn text-secondary bg-white text-left col-md-12 '],['style'=>'']) !!}
                                           
                                        </div>
                                    
                                  
                                    <div class="col-md-12 form-group">
                                        <br>
                                        <center>
                     
                                            {!! Form::submit('ADD ORDER', ['class' => 'btn bg-secondary text-white']) !!}
                                        </center>
                                     </div>
                                     
                                     {!! Form::close() !!}
                                     
                                  </div>
                            </div>
                  </center>
                </div>
            </div>
           
        </div>
       
                         
        <footer class="foot" role="contentinfo"
        
        style="background-color:#21201e; color:white;  padding-left:-4em;">
                <div class="container">
                  <div class="row mb-12">
                    <div class="col-md-3 mb-5">
                      <h4 style="padding-top:2em; ">About Us</h4>
                      <p class="mb-5 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
                   
          
                    </div>
                    <div class="col-md-3 mb-5 ">
                      <div class="mb-5">
                        <h4 style="padding-top:2em;">Opening Hours</h4>
                        <p class="text-secondary"><strong class="d-block text-secondary">24/7</strong> Simply, Everyday</p>
                      </div> </div>
                      <div class="col-md-3" style="padding-top:3em;">
                        <h4 class=''>Contact Info</h4>
                        <ul class="list-unstyled footer-link">
                          <li class="d-block">
                            <span class="d-block text-secondary">Address:</span>
                            <span class="text-white">Mwenge, Dar es Salaam, Tanzania</span></li><br>
                          <li class="d-block"><span class="d-block text-secondary">Telephone:</span><span class="text-white">+255 754 111 111</span></li><br>
                          <li class="d-block"><span class="d-block text-secondary">Email:</span><span class="text-white">info@ericktech.com</span></li>
                        </ul>
                      </div>
                   
                    <div class="col-md-3 mb-5" style="padding-top:3em; padding-right:-3em;">
                      <h4>Quick Links</h4>
                      <ul class="list-unstyled footer-link ">
                      <br>  <li><a class="text-danger social"  href="{{URL::asset('/about')}}">About</a></li>
                       <br>
                        <li><a class="text-danger socisl" href="{{URL::asset('/contact')}}">Contact</a></li>
                      <br>  <li><a class="text-danger social" href="{{URL::asset('/servicez')}}">Services</a></li>
                       
                     <br>   <li class=""><a class="text-danger" href="{{URL::asset('/booking')}}">Book Now</a></li>
                      </ul>
                    </div>
                   
                  </div>
                  
                </div>
                <div class="row">
                    <div class="col-12 text-md-center text-center">
                      <p class="text-secondary">
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                 </p>
                    </div>
                  </div>
              </footer>                                                  
                                            
                                                         
                
                        
                
             
    
  @endsection  
    

  