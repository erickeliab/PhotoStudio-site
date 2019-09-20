

@extends('layouts.adminlayout')

@section('content')

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
 
    <div id="main-wrapper">
       
            <header class="topbar" data-navbarbg="skin5">
                    @include('inc.adminav2')
            </header>
            
             <!-- HERE GOES THE SIDE BAR THAT NAVIGATES TO OTHER ADNMIN PAGES -->
             @include('inc.admin_navbar')
            <!-- END OF THE NAVIGATION BAR -->
          
        <div class="page-wrapper">
          
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Expenditures</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{URL::asset('/')}}">Home</a></li>
                                            <li  class="breadcrumb-item">
                                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                 </a>
                                              </li>
                                        </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
           
            @include('inc.board')
                <div class="container">
                        @include('inc.alerts')
                    </div>
                <div class=" well justify-content-center bg-white" style=" padding:2em;">
                    <center>

                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" style="padding:2em;" class="btn m-t-20 btn-secondary btn-rounded col-md-4 waves-effect waves-light">
                                <i class="ti-plus"></i> Add New</a>
                    </center>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Manage the income split</h5>
                            </div>
                            <?php $a = 0; 
                                            
                            ?>

                            @if(count($expens)>0)
                            <div class="table-responsive">
                            <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      
                                      <th scope="col" class="text-center font-weight-bold">Title</th>
                                      <th scope="col" class="text-center font-weight-bold">Body</th>
                                     
                                      <th scope="col" class="text-center text-success font-weight-bold">Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                      @foreach($expens as $expo)
                                      <tr>

                                            <td class="text-center">{{$expo->tittle}}</td>
                                            <td class="text-center">{{$expo->body}}</td>
                                            <td class="text-center text-success">{{$expo->amount}}/=</td>
                                           <?php $a = $a + $expo->amount; ?>
                                      </tr>
                                @endforeach

                                      <tr>
                                          <td></td>
                                          <td class="text-right font-weight-bold">Total</td>
                                          <td class="text-center font-weight-bold text-success">{{$a}}/=</td>
                                      </tr>
                                            
                                    
                                  </tbody>
                            </table>
                            <div>
                            @else 
                            No Records of expeditures yet
                   
                            @endif
                        </div>
                    </div>
                </div>
 
                   </div>
      
        <footer class="footer text-center">
            <p>PHOTOSHOOT ADMIN CMS</p>
        </footer>
      
    </div>
  
</div>
<!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add </strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    <div class="well container">
                                          
                            {!! Form::open(['method' => 'post', 'action' => ['ExpensController@store'],'enctype'=>'multipart/form-data']) !!}

                           
                                        
                                    <div class="row form-group">
                                            {!! Form::label('title', '', []) !!}
                                            {{Form::text('title','', ['class' => 'form-control' , 'placeholder' => ''])}}
                                          
                                       </div>
                                       <div class="row form-group">
                                        
                                            {!! Form::label('body', 'body', []) !!}
                                            
                                             {{Form::textarea('body','', ['class' => 'form-control' , '' => ''])}}
                                           
                                        </div>

                                        <div class="row form-group">
                                        
                                                {!! Form::label('amount', 'amount', []) !!}
                                                
                                                 {{Form::text('amount','', ['class' => 'form-control' , 'placeholder' => ''])}}
                                               
                                            </div>
                                  

                                   

                                        <div class="col-md-12 form-group  align-items-center ">
                                            
                                           
                                            
                                           <center>
                                                

                                           </center>
                     
                                         </div>

                                         <div class="modal-footer">
                                                {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            </div>

                                         {!! Form::close() !!}  


                       </div>
            </div>
            
        </div>
    </div>
</div>
<!-- END MODAL -->
@endsection