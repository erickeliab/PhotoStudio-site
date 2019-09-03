
    @extends('layouts.publiclayout')

    @section('content')

    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Services</h2>
              <span class="back-text">Our Services</span>
            </div>
          </div>
        </div>
      </div>


    <section class="section element-animate">
      
      <div class="container">
        <div class="row">


          @if(count($services) > 0)

          @foreach($services as $service)
                <div class="col-md-6 mb-4">
                    <div class="blog d-block d-lg-flex">
                      <div class="bg-image" style="background-image: url('{{$service->imagepath}}');"></div>
                      <div class="text">
                        <h3>{{$service->serv_name}}</h3>
                        <p class="sched-time">
                          <span><span class="fa fa-calendar"></span>Added {{$service->created_at}}</span> <br>
                        </p>
                        <p>{{$service->descr}}</p>
                        
                        <p><a href="services/{{$service->service_id}}" class="btn btn-primary btn-sm">Read More</a></p>
                        
                      </div>
                      
                    </div>
                  </div>

          @endforeach

          @endif

         
        </div>
      </div>

    

    @endsection