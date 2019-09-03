@extends('layouts.publiclayout')

@section('content')

   
   
    <section class="section element-animate">
        <div class="clearfix mb-5 pb-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 text-center heading-wrap">
                <h2>{{$services->serv_name}}</h2>
                <span class="back-text">{{$services->serv_name}}</span>
              </div>
            </div>
          </div>
        </div>

 

  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
         
          
          <div class="row justify-content-center">
            <div class="col-md-7 mb-5">
              <h2 class="mb-5">{{$services->serv_name}} PICTURES</h2>
              <span class="btn btn-primary">7000/=</span>
             
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, ab veniam, amet ut at ipsum accusamus! Libero fugiat reiciendis architecto dignissimos, magnam iusto rerum recusandae quidem id omnis optio numquam.</p>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet, voluptate ipsam sit voluptatibus illo animi expedita eius accusantium doloremque quas nam eos, quaerat harum aut excepturi, eum perspiciatis omnis!</p>
              <p>Tempore magnam quo reiciendis ullam quibusdam sit laboriosam tenetur nobis incidunt. Error culpa corporis aspernatur explicabo esse vero, nobis similique eaque quis repellendus dolore maiores! Molestiae beatae ratione quia a.</p>
              <p>Beatae quasi, totam officiis iste cum eaque maiores voluptatum qui eligendi doloribus pariatur explicabo expedita ullam, veritatis, eos libero numquam maxime cupiditate commodi repellat, illo provident! Quisquam rerum laudantium excepturi!</p>
             
            
              <p class="mb-5"><img src="{{URL::asset($services->imagepath)}}" alt="" class="img-fluid"></p>
               <a href="index.blade.php" class="btn btn-primary"> BOOK NOW</a>
          </div>
          </div>

        
        </div>

      </div>
    </div>
  </section>
  

   


@endsection

