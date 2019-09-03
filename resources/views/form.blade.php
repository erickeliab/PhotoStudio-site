{!! Form::open(['method' => 'post', 'action' => ['MessagesController@store'], 'class' => 'form-control']) !!}
<div class="row">
  <div class="col-md-6 form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name','', ['class' => 'form-control' , 'placeholder' => 'Your name'])}}
  </div>

  <div class="col-md-6 form-group">
        {{Form::label('phone', 'E-Mail Address')}}
        {{Form::text('phone','', ['class' => 'form-control' , 'placeholder' => 'Your Phone'])}}
     </div>
     </div>

   <div class="row">
   <div class="col-md-12 form-group">
     
      {{Form::textarea('body','', ['class' => 'form-control' , 'placeholder' => 'Your Message'])}}
   </div>
   </div>
  
    <div class="row">
    <div class="col-md-6 form-group">
           {!! Form::submit('Send Message', ['btn btn-primary']) !!}
    </div>
    </div>
{!! Form::close() !!}


{{--  
  
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
  
  --}}