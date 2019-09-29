

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
      
        <div class="page-wrapper bg-dark" style="margin-top:-2em;">
          
            
           
                <hr>
             
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container"> @include('inc.alerts')
                    </div>
                    
                 
                    <div class="row el-element-overlay">
                   
                        {{--  VIEWING THE SERVICES FROM THE DATABASE  --}}
                        <div class="col-md-6 col-lg-6 col-xlg-6">
                                <div class="card card-hover">
                                        
                                                <div class="box bg-dark text-center text-secondary">
                                                        <h6 class="text-white">Image Details</h6>
                                                        <br><br>
                                                        <span>Uploaded: {{$gall->created_at}}</span><br><br>
                                                        <span>Now:  @if($gall->show)
                                                            Visible on the slideshow
                                                            @else Not visible on the slideshow 
                                                            @endif
                                                        </span><br><br>
                                                        @if($gall->show)
                                                        <span>Caption: {{$gall->words}}</span>
                                                        @endif
                                                        <br><hr><br><br>
                                                        <h6 class="text-white">Action</h6>
                                                        <a href="{{URL::asset('/galleries')}}" style=""  class="btn btn-secondary btn-rounded  col-md-12 waves-effect waves-light">
                                                                <small>Gallery</small> </a>
                                                                <br><br>
                                                        @if($gall->show)
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-caption" style=""  class="btn btn-success btn-rounded  col-md-12 waves-effect waves-light">
                                                                <small>Update Caption</small> </a>
                                                                <br><br>
                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#remove-from-slideshow" style=""  class="btn btn-danger btn-rounded col-md-12 waves-effect waves-light">
                                                            <small>Remove From Slideshow</small> </a>
                                                         
                                                @else 

                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#add-to-slideshow" style=""  class="btn btn-success btn-rounded pull-left col-md-12 waves-effect waves-light">
                                                   <small>Add to Slideshow</small> </a>
                                                
                                                                @endif <br><br>
                                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#make-cover" style=""  class="btn btn-warning btn-rounded pull-left col-md-12 waves-effect waves-light">
                                                                        <small>Make A Service Cover</small> </a>
                                                </div>
                                </div>
                
                            </div>
                 
                    
                    
                      
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="{{URL::asset('storage/CoverImages/'.$gall->path)}}" alt="user" style="height:100%"/>
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{URL::asset('storage/CoverImages/'.$gall->path)}}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                    
                                        <hr>
                                              
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['GalleryController@destroy',$gall->image_id],'class' => 'pull-right col-md-5']) !!}
                                    
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-rounded']) !!}
                                    
                                    
                                    {!! Form::close() !!}
                                    
     {{--  /opt/lampp/htdocs/app/blog/public/storage/CoverImages/vlcsnap-2019-09-01-23h11m36s6141567686834.png  --}}
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                       
    
                        {{--  END OF SERVICES  --}}
    
                        
    
                    </div>     
                           </div>
              
                <footer class="footer text-center text-white">
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
                                {!! Form::text('caption',$gall->words, ['class'=>'form-control','placeholder' => $gall->words]) !!}
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

<!-- Modal Add Category -->
<div class="modal fade none-border" id="make-cover">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Choose Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                        {!! Form::open(['method' => 'post', 'action' => ['GalleryController@update',$gall->image_id]]) !!}
 
                            {!! Form::open(['method' => 'post', 'action' => ['GalleryController@store'],'enctype'=>'multipart/form-data']) !!}

                                            
                                         
                            <?php 
               //importing the Service model 
               use App\Service;
               $a = [];
               $records = Service::all();
               $svc = array();
               foreach($records as $record){
                   //create key 
                $key = $record->serv_key;
                $value = $record->serv_name;

                $a[$key] = $value;
                 
               }
               
             
               ?>
                  <div class="col-md-12 form-group ">
                    <br>
                        {!! Form::label('name', 'Service', []) !!} <br>
                        {!! Form::select('name', $a , 'G', ['class' => 'btn well col-md-12 btn-dark text-white']) !!}
                  </div>
                            
                            {!! Form::hidden('event','service', ['class'=>'form-control']) !!}
                                            
                                        
                                  
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
    



