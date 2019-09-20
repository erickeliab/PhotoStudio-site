@extends('layouts.publiclayout')

@section('content')
    
    <section class="container">
    <div class="section container">
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                  <h2>About</h2>
                
                </div>
              </div>
            </div>
          </div>
    
        <div class="row">
         
          
          <div class="col-lg-6 pl-2 pl-lg-5">
            <h2 class="mb-5">History</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius est soluta blanditiis velit doloremque corrupti aliquid ducimus consectetur ea nobis dolorem, id quibusdam praesentium consequuntur modi eligendi, sunt suscipit ullam iure nesciunt tempore. Itaque placeat, libero aliquam odio ex voluptas.</p>
            <p>Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>
            
            <p class="mb-5">Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>

          </div>
          <div class="col-lg-6">
              <p><img src="storage/CoverImages/cameraman11567750676.jpeg" alt="" class="img-fluid"></p>
              <p class="mb-5"><img src="storage/CoverImages/defaultImage1567749891.png" alt="" class="img-fluid"></p>
            </div>
          <div class="col-lg-6 pl-2 pl-lg-5">
            <h2 class="mb-5">Vision</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius est soluta blanditiis velit doloremque corrupti aliquid ducimus consectetur ea nobis dolorem, id quibusdam praesentium consequuntur modi eligendi, sunt suscipit ullam iure nesciunt tempore. Itaque placeat, libero aliquam odio ex voluptas.</p>
            <p>Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>
            
            <p class="mb-5">Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>

          </div>

          <div class="col-lg-6 pl-2 pl-lg-5">
            <h2 class="mb-5">Mission</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius est soluta blanditiis velit doloremque corrupti aliquid ducimus consectetur ea nobis dolorem, id quibusdam praesentium consequuntur modi eligendi, sunt suscipit ullam iure nesciunt tempore. Itaque placeat, libero aliquam odio ex voluptas.</p>
            <p>Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>
            
            <p class="mb-5">Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>

          </div>
        </div>
      </div>

    </section>


    
    

     <!-- .section -->
    <section>
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12 text-center heading-wrap">
                  <h2>Members</h2>
               
                </div>
              </div>
            </div>
          </div>
      <div class="container">
          <div class="row">
            <div class="major-caousel js-carousel-1 owl-carousel"  style="width: 100%;height: 100%;" >
              @if(count($users)>0)
              @foreach($users as $user)
                
              <div class="item">
                <div class="media d-block media-custom text-center">
                  <a href="storage/CoverImages/{{$user->userimg}}"><img src="storage/CoverImages/{{$user->userimg}}" alt="Image Placeholder" class="img-fluid" style="height:250px;"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">{{$user->name}}</h3>
                    <p class="lead">{{$user->Authority}}</p>
                  </div>
                </div>
              </div>
              @endforeach
              
               
            
              @endif
          </div>
          <!-- END slider -->
          </div>
      </div>
  </section>

@endsection