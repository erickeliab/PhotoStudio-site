<?php 
use App\Order;
use App\MessageModel;
use App\Service;
use App\User;

$odr = Order::all();
$msg = MessageModel::all();
$svc = Service::all();
$usr = User::all();

?>

@if(Auth::user()->id == 1)
<div class="container-fluid">
               
        <div class="row">
            
        
            <!-- Column -->
           

            <div class="col-md-3 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="fa fa-user m-b-5 font-16"></i></h1>
                        <h6 class="text-white">Users</h6>
                       
                        <h5 class="text-white">{{count($usr)}}</h5>
                       
                    
                      
                    </div>
                </div>
            </div> 
             <!-- Column -->
            <div class="col-md-3 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="fa fa-tag m-b-5 font-16"></i></h1>
                        <h6 class="text-white">Orders</h6>
                    
                        <h5 class="text-white">{{count($odr)}}</h5>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-3 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                        <h6 class="text-white">Services</h6>
                        <h5 class="text-white">{{count($svc)}}</h5>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-3 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="font-24 mdi mdi-comment-processing"></i></h1>
                        <h6 class="text-white">Messages</h6>
                        <h5 class="text-white">{{count($msg)}}</h5>
                    </div>
                </div>

            </div>

            <!-- Column -->
          
           
        </div>
        @else 

        <div class="container-fluid">
               
                <div class="row">
                    
                
                    <!-- Column -->
                   
        
                  
                     <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="fa fa-tag m-b-5 font-16"></i></h1>
                                <h6 class="text-white">Orders</h6>
                            
                                <h5 class="text-white">{{count($odr)}}</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Services</h6>
                                <h5 class="text-white">{{count($svc)}}</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="font-24 mdi mdi-comment-processing"></i></h1>
                                <h6 class="text-white">Messages</h6>
                                <h5 class="text-white">{{count($msg)}}</h5>
                            </div>
                        </div>
        
                    </div>
        
                    <!-- Column -->
                  
                   
                </div>

        @endif