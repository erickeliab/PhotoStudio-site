
    @extends('layouts.publiclayout')

    @section('content')
    <section class="home-slider owl-carousel">
<?php use App\Gallery; $gallery = Gallery::all(); ?>
        @if(count($gallery) > 0 )
        @foreach ($gallery as $item)
        @if($item->show)
      <div class="slider-item" style="background-image: url('storage/CoverImages/{{$item->path}}')">
        
       

       
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1></h1>
                <p class="mb-5">
       {{$item->words}} 
        </p>
                <p><a href="{{URL::asset('/booking')}}" class="btn btn-white btn-outline-white">Book Now</a></p>
              </div>
            </div>
          </div>
  
        </div>
  
            @endif
        @endforeach
        
        @else

       
        @endif
     
    

    </section>
   
    <!-- END slider -->
    <?php $i=0; ?>

    <section class="section bg-light element-animate">
      <div class="container">
        <div class="row">
            @if(count($services) > 0 )
            @foreach ($services as $item)
            <?php $i++; ?>
            @if($i < 5)

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            
            <center>
                <span class="col-md-8 display-4 text-black d-block mb-4">
             
                 
                    
                      <img src="storage/CoverImages/{{$item->imagepath}}" alt="" class="img-fluid rounded-circle" style="height:120px; width:120px;">
                    
                    
                    </span>
               
            <h4 class="mb-4 text-primary">{{$item->serv_name}}</h4>
            <p class="para" style="">
              <?php
              $sub = $item->serv_descr;
              $subs = substr($sub,0,100);
              echo $subs.'....';  ?></p> 
            <p><a href="services/{{$item->service_id}}" class="btn btn-primary btn-sm">Read More</a></p>
          </div>
        </center>
          @endif
         @endforeach

         @else 
          

         @endif
          
        </div>
      </div>
    </section>

    <hr id="formOps">
    
  <section class="container">


            <div class="col-md-12 text-center heading-wrap">
              <h2>Book Now</h2>
              <div class="containter well align-center">
                  <center>
                  <a href="{{URL::asset('/booking')}}" class="btn btn-primary">GO TO THE BOOKING PAGE</a>
                  </center>
                </div>
           
             
            </div>
         
     

{{--  {!! Form::label('date', 'Date: ' ) !!}
<div class="form-group input-group date">
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
    </span>
</div>  --}}



        {{--  END OF THE BOOKING FORM  --}}

          

  </section>
  <hr>
    <section class="section bg-light element-animate">

    
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Others</h2>
              
            </div>
          </div>
     

      <div class="container">
        <div class="row">


          @if(count($services) > 0)

          @foreach($services as $service)
                <div class="col-md-6 mb-4">
                    <div class="blog d-block d-lg-flex">
                      <div class="text">
                        <h3>{{$service->serv_name}}</h3>
                        <p>
                          <?php
                          $sube = $service->serv_descr;
                          $suby = substr($sube,0,50);
                          echo $suby.'....';  ?><a href="services/{{$service->service_id}}" class="">more</a>
                      </p>
                      <a href="{{URL::asset('/booking')}}" class="btn btn-primary">Book</a>
                      </div>
                      <div class="bg-image" style="background-image: url('storage/CoverImages/{{$service->imagepath}}');"></div>

                    </div>
                  </div>

          @endforeach

          @endif

         
        </div>
      </div>

    </section> <!-- .section -->
 
       
    
  
  <section>
      <div class="container">
          <div class="row">
            <div class="major-caousel js-carousel-1 owl-carousel" id="owl-demo" style="width: 100%;height: 100%;" >
                @if (count($gallery) > 0)
    
                @foreach ($gallery as $service)
                
              <div class="item">
                <div class=" text-center">
                  <a href="storage/CoverImages/{{$service->path}}"><img src="storage/CoverImages/{{$service->path}}" alt="Image Placeholder" class="img-fluid" style="height:200px;width:90%;"></a>
                  <div class="media-body">
                  
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
  <section>



@endsection
