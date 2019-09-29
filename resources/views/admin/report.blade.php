

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
                        <h4 class="page-title"></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Column -->
            <div class="col-md-4 col-lg-4 col-xlg-4">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-file-document font-26"></i></h1>
                        <h6 class="text-white">Report Summary</h6>
                        <span class="text-white text-center btn btn-info btn-block btn-rounded">Report: &nbsp{{$order['cat']}} </span>
                        <span class="text-white text-center btn btn-info btn-block btn-rounded">Total:  </span>
                        <span class="text-white text-center btn btn-info btn-block btn-rounded">Date: From&nbsp {{$order['datefrom']}} To &nbsp {{$order['dateto']}}  </span>
                     
                        <h5 class="text-white"></h5>
                    </div>
                </div>
            </div>
            <!-- Column -->
                
               <div class="container">
                    @include('inc.alerts')
               </div>

               <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body container">
                                <center> 
                            
                                                </center>
                                                <div class="row col-md-12 col-lg-12 col-sm-12 ">
                                                        <div class="col-md-9 col-lg-9 col-sm-9 ">   
                                                        </div>
                                                        <div class="col-md-3">
                                                                {!! Form::open(['method' => 'post', 'action' => ['DownloadController@store']]) !!}
                                                             {{Form::hidden('initdat',$order['dateone'], ['class' => 'form-control mydatepicker' , 'placeholder' => 'mm/dd/yyyy'])}}
                                                      {{Form::hidden('reporttype',$order['cat'], [])}}
                                                      {{Form::hidden('download',2, [])}}
                                                     
                                                     {{Form::hidden('dat',$order['datetwo'], ['class' => 'form-control' , 'placeholder' => 'mm/dd/yyyy','id'=>'datepicker-autoclose'])}}
                                                     {!! Form::submit('Preview', ['class' => 'btn btn-default btn-block col-md-12 btn-rounded']) !!}
                                                      {!! Form::close() !!}
                                                                            
                                                        </div>
        


                                                <div class="col-md-3 float-right">
                                                        {!! Form::open(['method' => 'post', 'action' => ['DownloadController@store']]) !!}
                                                     {{Form::hidden('initdat',$order['dateone'], ['class' => 'form-control mydatepicker' , 'placeholder' => 'mm/dd/yyyy'])}}
                                              {{Form::hidden('reporttype',$order['cat'], [])}}
                                              {{Form::hidden('download',1, [])}}
                                             
                                            
                                           
                                             {{Form::hidden('dat',$order['datetwo'], ['class' => 'form-control' , 'placeholder' => 'mm/dd/yyyy','id'=>'datepicker-autoclose'])}}
                                             {!! Form::submit('Download PDF', ['class' => 'btn btn-default btn-block col-md-12 btn-rounded']) !!}
                                              {!! Form::close() !!}
                                                                    
                                                </div>

                                                </div>
                                                
                <div class="table-responsive">  <br>
                            <table class="table col-md-12 col-lg-12 col-xl-12">
                                  <thead>
                                    <tr>
                                      
                                      <th scope="col" class="text-center">Event Type</th>
                                     <th scope="col" class="text-center">Date</th>
                                      <th scope="col" class="text-center">Cost</th>
                                      <th scope="col" class="text-center">Paid</th>
                                      <th scope="col" class="text-center">Status</th>
                                    
                                    </tr>
                                  </thead>
                                  <tbody>
                                        @if(count($order['disy']) > 0 )

                                        @foreach($order['disy'] as $od)

                                        @if($order['cat'] == 'Partial')
                                        @if($od->paid < $od->services->price)
                                        <tr>
                                                <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"> {{$od->service}} 
                                              
                                                
                                                </a></th>
                                            
                                              <td class="text-center">  {{$od->ocdate}} </td>
                                              <td class="text-center"> {{$od->services->price}} </td>
                                              <td class="text-center"> {{$od->paid}} </td>
                                              <td class="text-center">
                                                @if($od->approved == '1')
                                                <span class="text-success text-center">Approved</span>
                                                
                                                @elseif ($od->approved == 'new')

                                                <span class="text-warning text-center">New </span>

                                                @else
                                                <span class="text-danger text-center">Not Approved</span>
                                                
                                                
                                                @endif
                                              </td>
                                             
                                              </tr>
                                              @endif
                                            
                                              @elseif($order['cat'] == 'Full')
                                              @if($od->paid == $od->services->price)
                                              <tr>
                                                      <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"> {{$od->service}} 
                                                    
                                                      
                                                      </a></th>
                                                  
                                                    <td class="text-center">  {{$od->ocdate}} </td>
                                                    <td class="text-center"> {{$od->services->price}} </td>
                                                    <td class="text-center"> {{$od->paid}} </td>
                                                    <td class="text-center">
                                                      @if($od->approved == '1')
                                                      <span class="text-success text-center">Approved</span>
                                                      
                                                      @elseif ($od->approved == 'new')
      
                                                      <span class="text-warning text-center">New </span>
      
                                                      @else
                                                      <span class="text-danger text-center">Not Approved</span>
                                                      
                                                      
                                                      @endif
                                                    </td>
                                                   
                                                    </tr>
                                                    @endif
                                                    @elseif($order['cat'] == 'Approved' || $order['cat'] == 'Disapproved')
                                              
                                              <tr>
                                                      <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"> {{$od->service}} 
                                                    
                                                      
                                                      </a></th>
                                                  
                                                    <td class="text-center">  {{$od->ocdate}} </td>
                                                    <td class="text-center"> {{$od->services->price}} </td>
                                                    <td class="text-center"> {{$od->paid}} </td>
                                                    <td class="text-center">
                                                      @if($od->approved == '1')
                                                      <span class="text-success text-center">Approved</span>
                                                      
                                                      @elseif ($od->approved == 'new')
      
                                                      <span class="text-warning text-center">New </span>
      
                                                      @else
                                                      <span class="text-danger text-center">Not Approved</span>
                                                      
                                                      
                                                      @endif
                                                    </td>
                                                   
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
 
                   </div>
      
                       
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      
    </div>
    
  @endsection