








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
                        <h4 class="page-title">Dashboard</h4>
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
          
            <hr> 
                
                <h5>Add New User</h5>
     <hr>
                
                <div class="card container">
                        <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        
                        
                                       <div class="well container">
                                          
                                            {!! Form::open(['method' => 'post', 'action' => ['UsersController@store'],'enctype'=>'multipart/form-data']) !!}

                                           
                                                        
                                                    <div class="row form-group">
                                                            {!! Form::label('name', '', []) !!}
                                                            {{Form::text('name','', ['class' => 'form-control' , 'placeholder' => ''])}}
                                                          
                                                       </div>

                                                       <div class="row form-group">
                                                        
                                                            {!! Form::label('phone', 'phone', []) !!}
                                                            
                                                             {{Form::text('phone','', ['class' => 'form-control' ])}}
                                                           
                                                        </div>
                                                        <div class="row form-group">
                                                                {!! Form::label('Authority', 'Authority', []) !!} <br>
                                                                {!! Form::select('Authority',['M'=>'member','A'=> 'admin'],'M',['class' => 'text-center col-md-12 col-lg-12 col-sm-12']) !!}
                                                              
                                                           </div>

                                                       <div class="row form-group">
                                                        
                                                            {!! Form::label('email', 'email', []) !!}
                                                            
                                                             {{Form::text('email','', ['class' => 'form-control' , '' => ''])}}
                                                           
                                                        </div>

                                                       <div class="row form-group">
                                                                {!! Form::label('password', 'Password', []) !!}
                                                                
                                                                {!! Form::password('password', ['class' => 'form-control' ]) !!}
                                                                
                                                          
                                                            
                                                       </div>

 
                                                           
                                                       <div class="row form-group ">
                                                                 
                                                            {!! Form::label('newpassword', 'Repeat Password', []) !!}
                                                            {!! Form::password('newpassword', ['class' => 'form-control' ]) !!}
                                                            
                                                        </div>

                                                        <div class="col-md-12 form-group  align-items-center ">
                                                            <small>upload image</small>
                                                            {!! Form::file('CoverImage',['class' => 'btn btn-rounded','placeholder' => 'upload image']) !!}
                                                            
                                                           <center>
                                                                {!! Form::submit('Add User', ['class' => 'btn btn-primary btn-rounded']) !!}

                                                           </center>
                                     
                                                         </div>

                                                         {!! Form::close() !!}  


                                       </div>
                                          
                                            </div>



                                        </div></div>
                                    </div></div>
                                           
                                              
     
                     
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      
    </div>
    
   
@endsection



















