
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
      
        <div class="page-wrapper bg-light">
          
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        
                        <div class="ml-auto text-right">
                           
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
           <?php //$words = ''; ?>
           
            <div>
                   
                    
                            <div class="container-fluid bg-light">
                                   
                                    <div class="row ">
                                        
                                    
                                        <!-- Column -->
                                       
                            
                                      
                                         <!-- Column -->
                                        <div class="col-md-4 col-lg-4 col-xlg-4">
                                            <div class="card card-hover">
                                                <div class="box bg-info text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-account-box font-26"></i></h1>
                                                    <h6 class="text-white">Customer Details</h6>
                                                    <span class="text-white text-center btn btn-info btn-block btn-rounded">Name: &nbsp {{$od->username}}</span>
                                                    <span class="text-white text-center btn btn-info btn-block btn-rounded">Phone: &nbsp {{$od->phone}}</span>
                                                    <span class="text-white text-center btn btn-info btn-block btn-rounded">Amount Paid: &nbsp {{$od->paid}}</span>
                                                    @if($od->paid == $od->services->price)
                                                    <span class="text-white text-center text-success btn btn-info btn-block btn-rounded">Status: &nbsp Full
                                                      </span>
                                                      @elseif($od->paid == 0)
                                                      <span class="text-white text-center text-warning btn btn-info btn-block btn-rounded">Status: &nbsp Not Paid
                                                        </span>
                                                      @elseif($od->paid < $od->services->price)
                                                      <span class="text-white text-center text-warning btn btn-info btn-block btn-rounded">Status: &nbsp Partial
                                                        </span>
                                                        @elseif($od->paid > $od->services->price)
                                                        <span class="text-white text-center text-danger btn btn-info btn-block btn-rounded">Status: &nbsp Has Credits
                                                          </span>
                                                          @endif
                                                    <h5 class="text-white"></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-4 col-lg-4 col-xlg-4">
                                            <div class="card card-hover">
                                                <div class="box bg-info text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                                    <h6 class="text-white">Event Details</h6>
                                                    <span class="btn btn-info btn-block btn-rounded">Event Name: &nbsp {{$od->service}}</span>
                                                    <span class="btn btn-info btn-block btn-rounded">Event Date:&nbsp {{ $od->ocdate}}</span>
                                                    <span class="btn btn-info btn-block btn-rounded">Event Price: &nbsp {{$od->services->price}}</span>
                                                    <span class="btn btn-info btn-block btn-rounded">Event Status: &nbsp {{$od->ocdate}}</span>
                                                    <h5 class="text-white"></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->
                                        <div class="col-md-4 col-lg-4 col-xlg-4">
                                            <div class="card card-hover">
                                                <div class="box bg-info text-center">
                                                    <h1 class="font-light text-white"><i class="font-24 mdi mdi-comment-processing"></i></h1>
                                                    <h6 class="text-white">Action</h6>
                                                    @if($od->approved == '0') 
                                                    <br><br>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-aprove" class="btn btn-success btn-block btn-rounded">
                                                            Approve</a>
                                                    @elseif($od->approved == '1') 
                                                    <br><br>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-disaprove" class="btn btn-danger btn-block btn-rounded">
                                                            Disaprove</a>
                                                            @else 
                                                            
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-aprove" class="btn btn-success btn-block btn-rounded">
                                                                    Approve</a>
                                                             <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-disaprove" class="btn btn-danger btn-block btn-rounded">
                                                                    Disaprove</a>
                                                                    @endif
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-pay" class="btn btn-success btn-block btn-rounded">
                                                                    Add Payment</a>
                                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-updates" class="btn btn-warning btn-block btn-rounded">
                                                                            Update Information</a>                                                    <h5 class="text-white"></h5>
                                                </div>
                                            </div>
                            
                                        </div>
                            
                                      
                                      
                                       
                                    </div>
            </div>
              
                
               
                <div class="container-fluid">
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <div class="container"> @include('inc.alerts')
                    </div>
                    <hr>
                    <div class="card">
                            <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            
                            
                                        <div class="well" style="padding:20px;">
                                            {{--  hhhh  --}}
                                            <!-- Tabs -->
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Add Payment</span></a> </li>
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Update Information</span></a> </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <br><br>
                                        <center> <h2>Update Information</h2></center>

                                        {!! Form::open(['method' => 'post', 'action' => ['OrdersController@update',$od->order_id], "class"=>"col-md-12"]) !!}
                                        <div class="row well">
                                        
                                               
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
                                                
                                                
                                                     
                                                      {{Form::hidden('paid',$od->paid, ['class' => 'form-control' , 'placeholder' => 'paid'])}}
                                                    
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
                                <div class="tab-pane  p-20" id="profile" role="tabpanel">
                                    <div class="p-20">
                                            <div class="well">
                                                    <br>
                                                    <center> <h2>Add Payment</h2>  </center>
                         
                                                    {!! Form::open(['method' => 'post', 'action' => ['TransactionsController@update',$od->order_id], "class"=>"col-md-12"]) !!}
                                                  
                                                    <div class="row form-group">
                                                            {!! Form::label('paymethod', 'Payment Method', []) !!} <br>
                                                            {!! Form::select('paymethod', ['C' => 'Cash','M' => 'mpesa', 'T' => 'tigo pesa', 'A' => 'Airtel Money','B'=>'Bank'],'M',['class' => 'text-center col-md-12 col-lg-12 col-sm-12']) !!}
                                                          
                                                       </div>
                                                 
                                                  
                                                       
                                                         
                                                         <div class="row form-group">
                                                         
                                                              {!! Form::label('amount', 'amount', []) !!}
                                                              
                                                               {{Form::text('amount','', ['class' => 'form-control' , 'placeholder' => ''])}}
                                                             
                                                          </div>

                                                   
                                                     <div class="row form-group">
                                                          {{Form::hidden('_method','PUT')}}
                                                        
                                                          <center>
                                                             {!! Form::submit('UPDATE', ['class' => 'btn btn-primary btn-rounded']) !!} </center>
                                                          </div>
                                                          
                                                          {!! Form::close() !!}
                        
                        
                                               </div> </div>
                                </div>
                                <div class="tab-pane p-20" id="messages" role="tabpanel">
                                    <div class="p-20">
                                        <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
                                        <img src="assets/images/background/img4.jpg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                {{--  BEGINING OF THE FORM  --}}
                        </div>
                </div>     
                </div>

          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
     
        <!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add </strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-pay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                         
                            {!! Form::open(['method' => 'post', 'action' => ['TransactionsController@update',$od->order_id], "class"=>"col-md-12"]) !!}
                          
                             
                            <div class="row form-group">
                                {!! Form::label('paymethod', 'Payment Method', []) !!} <br>
                                {!! Form::select('paymethod', ['C' => 'Cash','M' => 'mpesa', 'T' => 'tigo pesa', 'A' => 'Airtel Money','B'=>'Bank'],'M',['class' => 'text-center col-md-12 col-lg-12 col-sm-12']) !!}
                              
                           </div>
                     
                      
                                 
                                 <div class="row form-group">
                                 
                                      {!! Form::label('amount', 'paid', []) !!}
                                      
                                       {{Form::text('amount','', ['class' => 'form-control' , 'placeholder' => 'paid'])}}
                                     
                                  </div>
                                
                           
                             <div class="row form-group">
                                  {{Form::hidden('_method','PUT')}}
                                
                                  <center>
                                     {!! Form::submit('UPDATE', ['class' => 'btn btn-primary btn-rounded']) !!} </center>
                                  </div>
                                  
                                  {!! Form::close() !!}


                       </div>
            </div>
            
        </div>
    </div>
</div>
<!-- END MODAL -->

<!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add </strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-aprove">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Approve this order</strong> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy',$od->order_id], 'class' => 'pull-right','id' => 'frm']) !!}
                           
                             <span class="text-warning">Are you sure you want to Approve this order??</span>          
                                  
                            
 
                            
                           
                             <div class="modal-footer">
                                    {!! Form::submit('Yes', ['class' => 'btn btn-danger']) !!}
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </div>

                             {!! Form::close() !!}  


                       </div>
            </div>
            
        </div>
    </div>
</div>
<!-- END MODAL -->



<!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong> </strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-disaprove">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Why?</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                                          
                            {!! Form::open(['method' => 'post', 'action' => ['approvedController@update',$od->order_id],'class' => 'pull-right','id' => 'frm']) !!}
                           
                                        
                                  
                                     
                                        <div class="row form-group">
                                        
                                                {!! Form::label('comment', 'comment', []) !!}
                                                
                                                {{Form::hidden('appro',0, ['class' => 'form-control' , 'placeholder' => ''])}}

                                                 {{Form::textarea('comment','', ['class' => 'form-control' , 'placeholder' => ''])}}
                                               
                                            </div>
                                  
                                           
                                   

                                        <div class="col-md-12 form-group  align-items-center ">
                                            
                                           
                                            
                                           <center>
                                                

                                           </center>
                     
                                         </div>

                                         <div class="modal-footer">
                                             
                                                {{Form::hidden('_method','PUT')}}                                             
                                                {!! Form::submit('Disaprove', ['class' => 'btn btn-danger']) !!}
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            </div>

                                         {!! Form::close() !!}  


                       </div>
            </div>
            
        </div>
    </div>
</div>
<!-- END MODAL -->


<!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Update Information </strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-updates">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Update Info</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                                          
                            {!! Form::open(['method' => 'post', 'action' => ['OrdersController@update',$od->order_id], "class"=>"col-md-12"]) !!}
                          
                             
                                   
                               <div class="row form-group">
                                     {!! Form::label('name', 'Name of the customer', []) !!}
                                     {{Form::text('name',$od->username, ['class' => 'form-control' , 'placeholder' => 'name'])}}
                                   
                                </div>
                                
                                
                                 
                                <div class="row form-group">
                                    
                                    {!! Form::label('phone', 'phone', []) !!}
                                    
                                     {{Form::text('phone',$od->phone, ['class' => 'form-control' , 'placeholder' => 'phone'])}}
                                   
                                </div>
                                <div class="row form-group">
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
                               
                                 <div class="row form-group">
                                         {!! Form::label('service', 'Service', []) !!} <br>
                                         {!! Form::select('service', $a, null,['class' => 'text-center col-md-12 col-lg-12 col-sm-12']) !!}
                                       
                                    </div>
                                  
                                    @if(Auth::user()->id == 1)
                                    <div class="row form-group">
                                    
                                         
                                          {{Form::hidden('paid',$od->paid, ['class' => 'form-control' , 'placeholder' => 'paid'])}}
                                        
                                     </div>
                                     @endif
                              
                                <div class="row form-group">
                                     {{Form::hidden('_method','PUT')}}
                                   
                                     <center>
                                        {!! Form::submit('UPDATE', ['class' => 'btn btn-primary btn-rounded']) !!} </center>
                                     </div>
                                     
                                     {!! Form::close() !!}
                                     

                       
            
            
        </div>
    </div>
</div>
<!-- END MODAL -->



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
    
       