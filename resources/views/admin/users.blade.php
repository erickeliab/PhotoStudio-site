

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
                        <h4 class="page-title">Users</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{URL::asset('/')}}">Home</a></li>
                                            <li  class="breadcrumb-item">
                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                 </a>
                                              </li>
                                        </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
           
            @include('inc.board')
                <div class="container">
                        @include('inc.alerts')
                    </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body container">
                                <h5 class="card-title m-b-0">Registered Users</h5>
                           
                                <div class="table-responsive">
                            <table class="table table-hover col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12">
                                  <thead>
                                    <tr>
                                      
                                      <th scope="col" class="text-center font-weight-bold">Name</th>
                                      <th scope="col" class="text-center">Email</th>
                                     
                                      <th scope="col" class="text-center">Phone</th>
                                      <th scope="col" class="text-center">Authority</th>
                                      <th scope="col" class="text-center">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @if(count($users)>0)
                                        @foreach($users as $user)
                                        <tr>
                                                <th scope="row" > <a href="users/{{$user->id}}/edit" class="link-item text-dark"><h5 class="text-center">{{$user->name}}</h5></a></th>
                                              
                                                <td class="text-center">{{$user->email}}</td>
                                                
                                                <td class="text-center"> {{$user->phone}}

                                                </td>

                                                <td class="text-center"> {{$user->Authority}}
                                                    
                                                    </td>
                                                   
                                                                    {!! Form::open(['method' => 'DELETE', 'action' => ['UsersController@destroy',$user->id],'class' => 'pull-right']) !!}
                                                       
                                                       <td class="text-center">    
                                                            @if($user->Authority !== 'admin')  
                                                           
                                                        @if($user->activated)
                                                            {!! Form::submit('Deactivate', ['class' => 'btn btn-danger btn-rounded']) !!}

                                                        @else
                                                        {!! Form::submit(' Activate ', ['class' => 'btn btn-success btn-rounded']) !!}
                                                        @endif 

                                                        @else
                                                       <a href="#" class="btn btn-warning btn-rounded">Administrator</a>
                                                        

                                                        @endif
                                                    </td>
                                            
                                                        {!! Form::close() !!}
                                                   
                                               
                                              </tr>
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