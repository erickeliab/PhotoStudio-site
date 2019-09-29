

@extends('layouts.adminlayout')

@section('content')
<?php use App\Order; ?>

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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body container">
                                        <center> 
                                        <h5 class="card-title m-b-0">FINANCIAL STATUS OF APPROVED ORDERS</h5><br>
                                                        </center>
                                                        <div class="container">
                                                                @include('inc.alerts')
                                                           </div>
                        <div class="table-responsive">
                                    <table class="table table-hover col-md-12 col-lg-12 col-xl-12">
                                          <thead>
                                            <tr>
                                                    <th scope="col" class="text-center font-weight-bold">Customer</th>
                                              <th scope="col" class="text-center font-weight-bold">Order</th>
                                            
                                             
                                              <th scope="col" class="text-center font-weight-bold">Amount</th>
                                              <th scope="col" class="text-center font-weight-bold">Paid</th>
                                              <th scope="col" class="text-center font-weight-bold">Remain</th>
                                              <th scope="col" class="text-center font-weight-bold">Payment</th>
                                              
                                              <th scope="col" class="text-center font-weight-bold">Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                                @if(count($order) > 0 )
        
                                                @foreach($order as $od)
                                                @if($od->approved)
                                                <?php 
                                                   

                                                    $ody = Order::find($od->order_id);
                                                ?>
                                                <tr><td class="text-center">{{$od->username}}</td>
                                                        <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark">{{$od->service}} 
                                                        
                                                        
                                                       </a></th>
                                                      
                                                        
                                                        
                                                        <td class="text-center text-primary"> {{$ody->services->price}}/= </td>

                                                        <td class="text-center text-success"> {{ $ody->paid}}/= </td>
                                                       
                                                   
                                                      <td class="text-center text-danger">  <?php  
                                                       
                                                        $flot1 = floatval($ody->services->price);
                                                        $flot = (float)$ody->paid;
                                                        //$sum = $flot1  $flot; 
                                                        $diff = $flot1-$flot; 
                                                        echo  $diff.'/='; ?> </td>
                                                       
                                                      <td class="text-center text-warning">
                                                          @if($diff == $flot1)
                                                        Not Paid
                                                        @elseif($diff < $flot1 && $diff > 0)
                                                        Partial 
                                                        @elseif($diff == 0)
                                                        Full
                                                        @elseif($diff < 0)
                                                        Has Credits
                                                    @endif    
                                                    </td>
                                                    
                                               
                                        
                                                    <td class="text-center">
                                                            <a href="{{URL::asset('orders/'.$od->order_id)}}" class="text-center btn btn-secondary btn-rounded text-black">Open File</a>
                                                                
                                                                
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