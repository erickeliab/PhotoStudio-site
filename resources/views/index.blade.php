
    @extends('layouts.publiclayout')

    @section('content')
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
        
        @if(count($services) < 0 )

        @foreach ($services as $item)
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>{{$item->serv_name}}</h1>
                <p class="mb-5">
       {{$item->serv_descr}}
        </p>
                <p><a href="#" class="btn btn-white btn-outline-white">Book Now</a></p>
              </div>
            </div>
          </div>
  
        </div>
  
            
        @endforeach
        
        @else

        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>WEDDING</h1>
                <p class="mb-5">Many people spend more time in planning the wedding than they do in planning the marriage.
  
          <br> Zig Ziglar  </p>
                <p><a href="#" class="btn btn-white btn-outline-white">Book Now</a></p>
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>Baby Shower</h1>
                <p class="mb-5">Just like a plant needs light and space to grow, a child needs love and freedom to unfold.</p>
                <p><a href="#" class="btn btn-white btn-outline-white">Book Now</a></p>
              </div>
            </div>
          </div>
          
        </div>
  
        <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>Birthdays</h1>
                <p class="mb-5">“Happy birthday! Your life is just about to pick up speed and blast off into the stratosphere. Wear a seat belt and be sure to enjoy the journey. Happy birthday!”</p>
                <p><a href="#" class="btn btn-white btn-outline-white">Book Now</a></p>
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>Engagement</h1>
                <p class="mb-5">Engagement is trying to figure out each other’s quirks before the two of you get married.</p>
                <p><a href="#" class="btn btn-white btn-outline-white">Book Now</a></p>
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 element-animate">
                <h1>Graduations</h1>
                <p class="mb-5">Do all the other things, the ambitious things—travel, get rich, get famous, innovate, lead, fall in love, make and lose fortunes…but as you do, to the extent that you can, err in the direction of kindness</p>
                <p><a href="#" class="btn btn-white btn-outline-white">Book Now</a></p>
              </div>
            </div>
          </div>
  
        </div>
        @endif
     
    

    </section>
    <!-- END slider -->
    

    <section class="section bg-light element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <h4 class="mb-4 text-primary">Wedding</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <h4 class="mb-4 text-primary">Birthdays</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <h4 class="mb-4 text-primary">Graduations</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-center">
            <h4 class="mb-4 text-primary">Baby Shower</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic maiores. Velit nisi, reprehenderit, nobis officia.</p>
          </div>
        </div>
      </div>
    </section>

    <hr id="formOps">
    
  <section class="container">

  <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Book Here</h2>
              <span class="back-text-dark" id="formOps">Book</span>
            </div>
          </div>
        </div>
      </div>
{{--    --}}
{!! Form::label('date', 'Date: ' ) !!}
<div class="form-group input-group date">
    {!! Form::text('date', null, ['class' => 'form-control']) !!}
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
    </span>
</div>


        {{--  HERE GOES THE FORM FOR THE ORDERS OR BOOKINGS  --}}

        <form class="well container" action="" method="post" id="booknow">
            <div class="container row" id="form">
                <div class="col-md-3 mb-3 mb-lg-0 col-lg-3 text-center">
                <input type="text" name="name" id="nameid" placeholder="Name">
                </div>

                <div class="col-md-3 mb-3 mb-lg-0 col-lg-3 ">
                <input type="text" name="date" id="" placeholder="date">
                    </div>

            <div class="col-md-3 mb-3 mb-lg-0 col-lg-3 text-center">
            <input type="text" name="phone" id="" placeholder="Phone">

                    </div>

                        <div class=" col-md-3 mb-3 mb-lg-0 col-lg-3  ">
                        <div class="row">
                                
                                <div class="col-md-12">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                        <option>Wedding</option>
                                         <option value="AK">Birthdays</option>
                                        <option value="HI">Graduations</option>
                                        <option>Anniversary</option>
                                         <option value="AK">Baby Shower</option>
                                        <option value="HI">Engagement</option>
                                        <option value="AK">Suprises</option>
                                        <option value="HI">Holydays</option>
                                    </select>
                                    </div>
                        </div>  
            </div>
            <hr>
               <div id="bookbtn" class="form-group text-center col-md-3 mb-3 mb-lg-0 col-lg-3 "></div>
               <center>

               <input type="button" class="btn btn-primary btn-block text-center" value="BOOK SERVICE">

               </center>

               
        </form>

        {{--  END OF THE BOOKING FORM  --}}

          

  </section>
  <hr>
    <section class="section bg-light element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Others</h2>
              <span class="back-text-dark">Others</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
           
{{--  HERE GOES THE SQUIRE IMAGES  --}}

@if (count($services) < 0)
    
@foreach ($services as $service)

    
@endforeach
<div class="col-md-6">
    <div class="sched d-block d-lg-flex">
      <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');"></div>
      <div class="text order-1">
        <h3>{{$service->serv_name}}</h3>
        <p>{{$service->serv_descr}}</p>
        <a href="#formOps" class="btn btn-primary">Book</a>
        
      </div>
      
    </div>

@else
<div class="sched d-block d-lg-flex">
    <div class="bg-image order-2" style="background-image: url('img/dishes_4.jpg');"></div>
    <div class="text order-1">
      <h3>Hollydays</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
      <a href="#formOps" class="btn btn-primary">Book</a>
    </div>
    
  </div>

  <div class="sched d-block d-lg-flex">
    <div class="bg-image" style="background-image: url('img/dishes_1.jpg');"></div>
    <div class="text">
      <h3>Annivesary</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
      <a href="#formOps" class="btn btn-primary">Book</a>
      
    </div>
    
  </div>

</div>
<div class="col-md-6">
    <div class="sched d-block d-lg-flex">
      <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');"></div>
      <div class="text order-1">
        <h3>Kitchen Parties</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
        <a href="#formOps" class="btn btn-primary">Book</a>
        
      </div>
      
    </div>

    <div class="sched d-block d-lg-flex">
      <div class="bg-image" style="background-image: url('img/dishes_3.jpg');"></div>
      <div class="text">
        <h3>chool Bash</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
        <a href="#formOps" class="btn btn-primary">Book</a>
        
      </div>
      
    </div>

  </div>
    
@endif


{{--  END OF THESQUIRE IMAGES SECTION  --}}


</div>

      </div>
    </section> <!-- .section -->


       
    
    <section class="py-5 bg-light">
      <div class="container">
          @include('inc.alerts')
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="row">
              <div class="col-md-12">
                <h3>Quick Message</h3>
                <p>Tell us about our services, your opinions mean a world to us</p>
              </div>

              {{--  QUICK MESSAGE FORM  --}}

              
              {!! Form::open(['method' => 'post', 'action' => ['MessagesController@store'], 'class' => 'col-12']) !!}
              <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                    {{Form::text('phone','', ['class' => 'form-control' , 'placeholder' => 'Your Phone'])}}
                </div>
                
                <div class="col-md-4">
                  {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}
              
                </div>
                </div>
              
              {!! Form::close() !!}
              
              

              {{--  END OF THE FORM  --}}
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection