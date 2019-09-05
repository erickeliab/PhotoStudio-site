
@extends('layouts.adminlayout')

@section('content')

    
 
    
        @include('inc.publicnav')
        
      
            <hr>
            <br><br><br>
          
               
               <div class="container">
                       
                {{--  BEGINING OF THE FORM  --}}

           {!! Form::open(['method' => 'post', 'action' => ['OrdersController@store']]) !!}
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
             
                
                {!! Form::close() !!}
                
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
   
  @endsection  
    
