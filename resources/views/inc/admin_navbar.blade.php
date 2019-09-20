    
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav fixed">
                    <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/dashboards')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/messages')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Messages</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/reports')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Report</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=""></i><span class="hide-menu">Orders </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">All Orders</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders/create')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Add Order</span></a></li> 
    
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=""></i><span class="hide-menu">Services </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/services')}}"  aria-expanded="false"><i class=""></i><span class="hide-menu">All Services</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('services/create')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Add Service</span></a></li>
    
                            </ul>
                        </li>
                        @if(Auth::user()->Authority == 'admin')

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=""></i><span class="hide-menu">Users </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/users')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">All Users</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/aduser')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Add User</span></a></li> 
    
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=""></i><span class="hide-menu">Finance </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/finances')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">All Finance</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/expens')}}" aria-expanded="false"><i class=""></i><span class="hide-menu">Expenditures</span></a></li>
    
                            </ul>
                        </li>

                        @endif
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=""></i><span class="hide-menu">{{Auth::user()->name}}</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                    <li  class="sidebar-item"><i class=""></i><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
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
      