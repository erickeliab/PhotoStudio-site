
  


    @extends('layouts.publiclayout')

    @section('content')

    <section class="home-slider owl-carousel">
      
              
              <div class="slider-item bg-dark">
                
               
        
               
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                      <div class="col-md-10 text-center col-sm-12 element-animate">
                   
                        <p><a href="{{URL::asset('galleries/'.$arr['previous'][0]->image_id)}}" class="btn btn-white btn-outline-white col-md-2 col-sm-4 col-xs-4 float-left" style="margin-top:8em;">Previous</a></p>
                        <p><a href="{{URL::asset('galleries/'.$arr['next'][0]->image_id)}}" class="btn btn-white btn-outline-white col-md-2 col-sm-4 col-xs-4 float-right" style="margin-top:8em;">Next</a></p>
                        
                        <p class="mb-5">
                            <a href="{{URL::asset('storage/CoverImages/'.$arr['gall']->path)}}">
                            <img src="{{URL::asset('storage/CoverImages/'.$arr['gall']->path)}}" alt="user" class="col-md-8 text-center col-sm-12 element-animate" style="margin-top:3em; height:100%;"/>
                        </a>
                </p>
                      </div>
                    </div>
                  </div>
          
                </div>
          
              
             
            
        
            </section>
    
    @endsection