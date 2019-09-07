@extends('layouts.publiclayout')

@section('content')
    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>About</h2>
              <span class="back-text">About Us</span>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section>
    <div class="section container">
        <div class="row">
         
          
          <div class="col-lg-6 pl-2 pl-lg-5">
            <h2 class="mb-5">History</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius est soluta blanditiis velit doloremque corrupti aliquid ducimus consectetur ea nobis dolorem, id quibusdam praesentium consequuntur modi eligendi, sunt suscipit ullam iure nesciunt tempore. Itaque placeat, libero aliquam odio ex voluptas.</p>
            <p>Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>
            
            <p class="mb-5">Vel vitae, assumenda blanditiis nemo in vero reprehenderit asperiores distinctio exercitationem aliquid, quam velit explicabo neque. Sapiente provident sequi omnis itaque eaque voluptatum vel. Accusamus deserunt atque eligendi mollitia voluptates eum libero, ratione id labore. Magnam porro dolorem aspernatur, dolor?</p>

          </div>
          <div class="col-lg-6">
              <p><img src="img/hero_2.jpg" alt="" class="img-fluid"></p>
              <p class="mb-5"><img src="img/hero_1.jpg" alt="" class="img-fluid"></p>
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


    
    

    <section class="section element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Members</h2>
              <span class="back-text">Members</span>
            </div>
          </div>
        </div>
      </div>
        <div class="container">
          <div class="row">
            <div class="major-caousel js-carousel-1 owl-carousel">
              <div>
                @if(count($users)<0)
                @foreach($users as $user)
                <div class="media d-block media-custom text-center">
                    <a href="adoption-single.html"><img src="{{URL::asset('storage/CoverImages/'.$user->userimg)}}" alt="Image Placeholder" class="img-fluid"></a>
                    <div class="media-body">
                      <h3 class="mt-0 text-black">{{$user->name}}</h3>
                      <p class="lead">Co-Founder</p>
                    </div>
                  </div>
                </div>
                @endforeach

                  @else 

                  <div class="media d-block media-custom text-center">
                      <a href="adoption-single.html"><img src="img/person_1.jpg" alt="Image Placeholder" class="img-fluid"></a>
                      <div class="media-body">
                        <h3 class="mt-0 text-black">Mellisa Howard</h3>
                        <p class="lead">Co-Founder</p>
                      </div>
                    </div>
                  </div>
                  <div>
                      <div class="media d-block media-custom text-center">
                        <a href="adoption-single.html"><img src="img/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
                        <div class="media-body">
                          <h3 class="mt-0 text-black">Mike Richardson</h3>
                          <p class="lead">Photographer</p>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="media d-block media-custom text-center">
                        <a href="adoption-single.html"><img src="img/person_3.jpg" alt="Image Placeholder" class="img-fluid"></a>
                        <div class="media-body">
                          <h3 class="mt-0 text-black">Charles White</h3>
                          <p class="lead">Photographer</p>
                        </div>
                      </div>
                    </div>
      
                     <div>
                    <div class="media d-block media-custom text-center">
                      <a href="adoption-single.html"><img src="img/person_1.jpg" alt="Image Placeholder" class="img-fluid"></a>
                      <div class="media-body">
                        <h3 class="mt-0 text-black">Mellisa Howard</h3>
                        <p class="lead">Photographer</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media d-block media-custom text-center">
                      <a href="adoption-single.html"><img src="img/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
                      <div class="media-body">
                        <h3 class="mt-0 text-black">Video Editor</h3>
                        <p class="lead">CEO, Co-Founder</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="media d-block media-custom text-center">
                      <a href="adoption-single.html"><img src="img/person_3.jpg" alt="Image Placeholder" class="img-fluid"></a>
                      <div class="media-body">
                        <h3 class="mt-0 text-black">Charles White</h3>
                        <p class="lead">CEO, Co-Founder</p>
                      </div>
                    </div>
                  </div>
                  
                    
                </div>
                @endif
                
             
          <!-- END slider -->
          </div>
        </div>
      
    </section> <!-- .section -->

@endsection