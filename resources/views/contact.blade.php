
    @extends('layouts.publiclayout')

    @section('content')
    
    
    <!-- <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item jumbotron" style="background-image: url('img/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contact Us</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
     -->

    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Contact Us</h2>
            
            </div>
          </div>
        </div>
      </div>
      <div class="container">
          @include('inc.alerts')
        <div class="row">
          <div class="col-lg-6">
           {{--  BEGINING OF THE FORM  --}}

           {!! Form::open(['method' => 'post', 'action' => ['MessagesController@store']]) !!}
           <div class="row">
             <div class="col-md-6 form-group">
                  
                   {{Form::text('sender','', ['class' => 'form-control' , 'placeholder' => 'Your name', 'style' => ' border-radius:30px;'])}}
             </div>
           
             <div class="col-md-6 form-group">
                  
                   {{Form::text('phon','', ['class' => 'form-control' , 'placeholder' => 'Your Phone'])}}
                </div>
                </div>
        
              <div class="row">
              <div class="col-md-12 form-group">
                
                 {{Form::textarea('body','', ['class' => 'form-control' , 'placeholder' => 'Your Message'])}}
              </div>
              </div>
             
               <div class="row">
               <div class="col-md-6 form-group">
                      {!! Form::submit('Send Message', ['class' => 'btn btn-primary']) !!}
               </div>
               </div>
           {!! Form::close() !!}

           {{--  EBD OF THE FORM  --}}
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>Mwenge, Dar es Salaam, Tanzania</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+255 754 111 000</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info@ericktech.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>

@endsection