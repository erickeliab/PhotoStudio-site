    
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav fixed">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/dashboards')}}" aria-expanded="false"><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders')}}"aria-expanded="false"><span class="hide-menu">Orders</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/services')}}"  aria-expanded="false"><span class="hide-menu">Services</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/messages')}}" aria-expanded="false"></i><span class="hide-menu">Messages</span></a></li>
                        @if(Auth::user()->id == 1)
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/users')}}" aria-expanded="false"><span class="hide-menu">Users</span></a></li>
                        @endif
                        <hr>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('services/create')}}" aria-expanded="false"><span class="hide-menu">Add Service</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/orders/create')}}" aria-expanded="false"><span class="hide-menu">Add Order</span></a></li> 
                        @if(Auth::user()->id == 1)
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{URL::asset('/aduser')}}" aria-expanded="false"><span class="hide-menu">Add User</span></a></li> 
                         @endif
                          <hr>   <li  class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
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
      