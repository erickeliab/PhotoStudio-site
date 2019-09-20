

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
                        <h4 class="page-title">Messages</h4>
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
            
            @include('inc.board')    <hr>
               @include('inc.alerts')
                <div class="row">

                    @if(count($message) > 0 )
                    
                    @foreach($message as $msg)

                      
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$msg->sender}}</h5>
                                <p>
                                        <?php
                                        $sube = $msg->body;
                                        $suby = substr($sube,0,20);
                                        if($sube > $suby){
                                            echo $suby.'....'.'<a href="messages/'.$msg->id.'" class="">more</a>';  
                                        }else echo $sube
                                        ?>
                                    
                                </p>
                                
                               <hr>
                               <div class="raw"> 
                                  
                                <small>{{$msg->phon}}</small>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['MessagesController@destroy',$msg->id],'class' => 'pull-right']) !!}
                                
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-rounded']) !!}
                                
                                
                                {!! Form::close() !!}
                                

                            
                            </div>
                               

                            </div>
                        </div>
                    </div>

                    @endforeach

                    @else
                    <p>No post found</p>
                    @endif
                   
                    
            </div>
                 
     
                       </div>
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      
    </div>
    
  @endsection