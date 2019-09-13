
@extends('layouts.adminlayout')

@section('content')

 
              
              
                

      <div class="main-wrapper  bg-white" style="margin-top:-30px;">
     
            
            @include('inc.publicnav')
 
                <div class="container"><hr>
                   
                  
                    </div>
                    <hr>
                     
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-white">
                   
                <div class=" border-top border-secondary bg-white text-dark" style="margin-top:30px; padding:30px;">
                    <div>
                           
                       
                        <!-- Form -->
                        {!! Form::open(['method' => 'post', 'action' => ['bookingsController@add'],'class'=>'jumbotron']) !!}
                        
                        <div class="text-center p-t-20 p-b-20">
                                <h1 class="">ORDER HERE</h1>
                            </div>

                            <div class="text-center p-t-20 p-b-20">
                                    @include('inc.alerts')
                            </div>
                        <div class="row well">
                               
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
                           
                           
                             <div class="col-md-12 form-group">
                                     {!! Form::label('service', 'Service', []) !!} <br>
                                     {!! Form::select('service', ['B'=>'Birthdays','G'=>'Graduations','A'=>'Anniversary','S'=>'Baby Shower','E'=>'Engagement','S'=>'Suprises','H'=>'Holydays'], 'G',['class' => 'btn btn-secondary text-white col-md-12 ']) !!}
                                   
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
                </div>
            </div>
           
        </div>
       
                         
                                                            
                                            
                                                         
                
                        
                
             
    
  @endsection  
    

  