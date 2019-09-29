    
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav fixed">
                    <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/')}}" aria-expanded="false"><i class="fas fa-home"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/dashboards')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/messages')}}" aria-expanded="false"><i class="mdi mdi-message"></i><span class="hide-menu">Messages</span></a></li>


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-reorder-horizontal"></i><span class="hide-menu">Orders </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders')}}" aria-expanded="false"><i class="mdi mdi-reorder-vertical"></i><span class="hide-menu">All Orders</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders/create')}}" aria-expanded="false"><i class="fas fa-cart-plus"></i><span class="hide-menu">Add Order</span></a></li> 
    
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-servicestack"></i><span class="hide-menu">Services </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/services')}}"  aria-expanded="false"><i class="mdi mdi-store"></i><span class="hide-menu">All Services</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('services/create')}}" aria-expanded="false"><i class="mdi mdi-database-plus"></i><span class="hide-menu">Add Service</span></a></li>
    
                            </ul>
                        </li>
                        @if(Auth::user()->Authority == 'admin')

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Users </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/users')}}" aria-expanded="false"><i class="mdi mdi-account-outline"></i><span class="hide-menu">All Users</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/aduser')}}" aria-expanded="false"><i class="mdi mdi-account-plus"></i><span class="hide-menu">Add User</span></a></li> 
    
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu">Gallery</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/galleries')}}" aria-expanded="false"><i class="mdi mdi-image"></i><span class="hide-menu">All Images</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/slider')}}" aria-expanded="false"><i class="mdi mdi-image"></i><span class="hide-menu"></span>Slideshow</a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/showothers')}}" aria-expanded="false"><i class="mdi mdi-image"></i><span class="hide-menu">Others</span></a></li>

                               
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu">Finance </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/finances')}}" aria-expanded="false"><i class=" far fa-money-bill-alt"></i><span class="hide-menu">All Finance</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/expens')}}" aria-expanded="false"><i class="fas fa-minus-square"></i><span class="hide-menu">Expenditures</span></a></li>
    
                            </ul>
                        </li>



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Report </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/reports/1')}}" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Aproved Orders</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/reports/2')}}" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Disaproved Orders</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/reports/3')}}" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Partial Paid Orders</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/reports/4')}}" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Full Paid Orders</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/reports/5')}}" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Expence Report</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/reports/6')}}" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Transaction Report</span></a></li>


                            </ul>
                        </li>

                        @endif
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">{{Auth::user()->name}}</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                    <li  class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();"><i class="mdi mdi-logout"></i>
                                         {{ __('Logout') }}
                                     </a>
                                  
                                </li>    
                            </ul>
                        </li>
                    </ul>
               

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        


                    
          </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
      