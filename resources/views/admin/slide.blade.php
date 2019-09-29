

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
                        <h4 class="page-title">Photo Gallery</h4>
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
                <h5>All Images</h5>
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container"> @include('inc.alerts')
                    </div>
                    <div class=" well justify-content-center bg-white" style=" padding:2em;">
                        <center>
                            <a href="{{URL::asset('/galleries')}}" style="padding:1em;" class="btn m-t-20 btn-secondary btn-rounded col-md-4 waves-effect waves-light"> <i class="ti-plus"></i>Add Image To Slidesow</a>
                           
                        </center>
                    </div>
                    <hr>
                    <div class="row el-element-overlay">
                   
                        {{--  VIEWING THE SERVICES FROM THE DATABASE  --}}
    
                       
                        @if(count($galleries) > 0)
                        @foreach($galleries as $gall)
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="{{URL::asset('storage/CoverImages/'.$gall->path)}}" alt="user" style="height:220px;"/>
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="storage/CoverImages/{{$gall->path}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                    
                                        <hr>
                                        <a href="{{URL::asset('galleries/'.$gall->image_id.'/edit')}}" class="float-left btn btn-secondary btn-rounded">Open File</a>

     {{--  /opt/lampp/htdocs/app/blog/public/storage/CoverImages/vlcsnap-2019-09-01-23h11m36s6141567686834.png  --}}
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p alert alert-primary> There are no any image yet</p>
    
                        @endif
    
                        {{--  END OF SERVICES  --}}
    
                        
    
                    </div>     
                           </div>
              
                <footer class="footer text-center">
                    <p>PHOTOSHOOT ADMIN CMS</p>
                </footer>
              
            </div>
                       </div>
          
           
          
        </div>
      
    </div>

<!-- BEGIN MODAL -->

<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-image">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Browse an image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                                          
                            {!! Form::open(['method' => 'post', 'action' => ['GalleryController@store'],'enctype'=>'multipart/form-data']) !!}

                                            
                                            {!! Form::file('galleryImage', ['class' => 'btn btn-block']) !!}
                                            
                                        
                                  
                                         <div class="modal-footer">
                                                {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            </div>

                                         {!! Form::close() !!}  


                       </div>
            </div>
            
        </div>
    </div>
</div>
<!-- END MODAL -->

<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-to-slideshow">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add to slideshow</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                        {!! Form::open(['method' => 'post', 'action' => ['GalleryController@update',$gall->image_id]]) !!}
 
                            {!! Form::open(['method' => 'post', 'action' => ['GalleryController@store'],'enctype'=>'multipart/form-data']) !!}

                                            
                                         
                            <div class="form-group">
                                
                                {!! Form::label('caption', 'Caption', ['class' => 'font-weight-bold']) !!}
                                {!! Form::text('caption','', ['class'=>'form-control']) !!}
                            </div>
                            
                            {!! Form::hidden('event','add', ['class'=>'form-control']) !!}
                                            
                                        
                                  
                                         <div class="modal-footer">
                                                {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                            {{Form::hidden('_method','PUT')}}
                                         {!! Form::close() !!}  


                       </div>
            </div>
            
        </div>
    </div>
</div>



<!-- Modal Add Category -->
<div class="modal fade none-border" id="edit-caption">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Caption</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                        {!! Form::open(['method' => 'post', 'action' => ['GalleryController@update',$gall->image_id]]) !!}
 
                            {!! Form::open(['method' => 'post', 'action' => ['GalleryController@store'],'enctype'=>'multipart/form-data']) !!}

                                            
                                         
                            <div class="form-group">
                                
                                {!! Form::label('caption', 'Caption', ['class' => 'font-weight-bold']) !!}
                                {!! Form::text('caption','', ['class'=>'form-control']) !!}
                            </div>
                            
                            {!! Form::hidden('event','update', ['class'=>'form-control']) !!}
                                            
                                        
                                  
                                         <div class="modal-footer">
                                                {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                            {{Form::hidden('_method','PUT')}}
                                         {!! Form::close() !!}  


                       </div>
            </div>
            
        </div>
    </div>
</div>



<!-- REMOVE FROM SLIDESHOW-->
<div class="modal fade none-border" id="remove-from-slideshow">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Remove from slideshow</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                        {!! Form::open(['method' => 'post', 'action' => ['GalleryController@update',$gall->image_id]]) !!}
 
                            {!! Form::open(['method' => 'post', 'action' => ['GalleryController@store'],'enctype'=>'multipart/form-data']) !!}

                                            
                            <center>
                          <span class="text-warning">Are you sure you want to remove this image from the slideshow??</span>
                            </center>
                            {!! Form::hidden('event','remove', ['class'=>'form-control']) !!}
                                            
                                        
                                  
                                         <div class="modal-footer">
                                                {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                            {{Form::hidden('_method','PUT')}}
                                         {!! Form::close() !!}  


                       </div>
            </div>
            
        </div>
    </div>
</div>
  @endsection  
    



