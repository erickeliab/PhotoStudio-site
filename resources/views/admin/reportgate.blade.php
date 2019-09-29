
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
      
        <div class="page-wrapper bg-white">
          
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Generate Report</h4>
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
           <?php //$words = ''; ?>
           
      
               
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container">
                     @include('inc.alerts')
                    </div>
                    @if(session('words'))

                    <div class="alert alert-danger">{{ session('words')}}</div>

                    @endif
                    <hr>
                    <div class="card container">
                            <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            
                            
                                           <div class="well container" style="padding:20px;">
                {{--  BEGINING OF THE FORM  --}}
                <center><h1>REPORT</h1></center><hr>
                <h4>{{$idy}} </h4>
                <br><small>Put the dates to specify the range of your report before you hit <b>GENERATE </b> to generate your report</small>
<br>           {!! Form::open(['method' => 'post', 'action' => ['ReportsController@store']]) !!}
           <div class="row well">
               
            
               
                
               <div class="col-md-12 form-group">
                   
                    {!! Form::label('initdate', 'From', []) !!}
                    <div class="input-group">
                            {{Form::text('initdate','', ['class' => 'form-control mydatepicker' , 'placeholder' => 'mm/dd/yyyy'])}}

                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
               </div>
               <div class="col-md-12 form-group">
                    {!! Form::label('date', 'To', []) !!}
                    <div class="input-group">
                    
                    {{Form::hidden('reporttype',$idy, [])}}

                    <input type="hidden" name="token" value="<?php echo csrf_token(); ?>">
                     {{Form::text('date','', ['class' => 'form-control' , 'placeholder' => 'mm/dd/yyyy','id'=>'datepicker-autoclose'])}}
                     <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                     </div>
                    </div>
              
                 <br><hr>
                       
             </div>

               
             <div class="col-md-12 form-group ">
                    <center>

                   {!! Form::submit('Generate', ['class' => 'btn btn-primary btn-rounded']) !!}
                   <center>
                       
                       {!! Form::close() !!}
                       
            </div>
               </div>
                </div>     
                       </div>
          
            <footer class="footer text-center">
                <p>PHOTOSHOOT ADMIN CMS</p>
            </footer>
          
        </div>
      <script>
            jQuery('.mydatepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
      </script>
    </div>
  @endsection  
    
