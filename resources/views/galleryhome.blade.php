
  


    @extends('layouts.publiclayout')

    @section('content')

  
    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Gallery</h2>
              
            </div>
          </div>
        </div>
      </div>



      <div class="container bg-light">
        <div class="row">


          @if(count($galler) > 0)

          @foreach($galler as $service)
                <div class="col-md-3 col-sm-6 mb-4 ">
                   <a href="{{URL::asset('galleries/'.$service->image_id)}}">
                        <img src="{{URL::asset('storage/CoverImages/'.$service->path)}}" class="thumbnail el-card-avatar el-overlay-1" alt="" style="height:320px; width:100%;">
                      
                    </a>
                   
                  </div>

          @endforeach

          @endif

         
        </div>
      </div>

    </section> 

    @endsection