

@extends('layouts.adminlayout')

@section('content')
    
   
 
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
                        <h4 class="page-title">Dashboard</h4>
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
     
                
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Recent Activities</h4>
                            </div>
                            <ul class="list-style-none">
                                <li class="card-body">
                                    <a href="#" class="m-b-0 p-0">
                                        <div class="d-flex no-block">
                                            <i class="fa fa-check-circle w-30px m-t-5"></i>
                                            <div>
                                                <span class="font-bold">Themeforest</span> Approved My college <span class="font-bold">1 user</span>
                                                <span>2 Hours Ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="card-body border-top">
                                    <a href="#" class="m-b-0 p-0">
                                        <div class="d-flex no-block">
                                            <i class="fa fa-gift w-30px m-t-5"></i>
                                            <div>
                                                <span class="font-bold">My College is PSD Template</span> Theme
                                                <span>2 Months Ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="card-body border-top">
                                    <a href="#" class="m-b-0 p-0">
                                        <div class="d-flex no-block">
                                            <i class="fa fa-plus w-30px m-t-5"></i>
                                            <div>
                                                <span class="font-bold">Lorem ipsum doler set</span> adadas 
                                                <span>21 Days Ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="card-body border-top">
                                    <a href="#" class="m-b-0 p-0">
                                        <div class="d-flex no-block">
                                            <i class="fa fa-leaf w-30px m-t-5"></i>
                                            <div>
                                                <span class="font-bold">ITs my first admin</span> so very excited. 
                                                <span>20 Days Ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="card-body border-top">
                                    <a href="#" class="m-b-0 p-0">
                                        <div class="d-flex no-block">
                                            <i class="fa fa-user w-30px m-t-5"></i>
                                            <div>
                                                <span class="font-bold"> I am alwayse here </span>you have any question
                                                <span>12 Days Ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                 
     
                       </div>
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      
    </div>
    
   
@endsection

