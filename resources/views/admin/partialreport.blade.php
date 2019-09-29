<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
</head>
<body>
        <center>
                <h1>Report on {{$cat}}</h1>    </center>
                <span>This is report from {{$datefrom}} to {{$dateto}}</span><br>
                <span class="text-sm">Total records:&nbsp;{{$records}}</span><br>
                <span class="float-right"><?php echo date('d-m-y'); ?></span>
                <hr>
    <div class="table-responsive">  <br>
        <table class="table col-md-12 col-lg-12 col-xl-12">
                <thead>
                  <tr>
                    
                    <th scope="col" class="text-center">Event Type</th>
                   <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center">Cost</th>
                    <th scope="col" class="text-center">Paid</th>
                    <th scope="col" class="text-center">Status</th>
                  
                  </tr>
                </thead>
                <tbody>
                      @if(count($disy) > 0 )

                      @foreach($disy as $od)

                      @if($cat == 'Partial')
                      @if($od->paid < $od->services->price)
                      <tr>
                              <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"> {{$od->service}} 
                            
                              
                              </a></th>
                          
                            <td class="text-center">  {{$od->ocdate}} </td>
                            <td class="text-center"> {{$od->services->price}} </td>
                            <td class="text-center"> {{$od->paid}} </td>
                            <td class="text-center">
                              @if($od->approved == '1')
                              <span class="text-success text-center">Approved</span>
                              
                              @elseif ($od->approved == 'new')

                              <span class="text-warning text-center">New </span>

                              @else
                              <span class="text-danger text-center">Not Approved</span>
                              
                              
                              @endif
                            </td>
                           
                            </tr>
                            @endif
                          
                            @elseif($cat == 'Full')
                            @if($od->paid == $od->services->price)
                            <tr>
                                    <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"> {{$od->service}} 
                                  
                                    
                                    </a></th>
                                
                                  <td class="text-center">  {{$od->ocdate}} </td>
                                  <td class="text-center"> {{$od->services->price}} </td>
                                  <td class="text-center"> {{$od->paid}} </td>
                                  <td class="text-center">
                                    @if($od->approved == '1')
                                    <span class="text-success text-center">Approved</span>
                                    
                                    @elseif ($od->approved == 'new')

                                    <span class="text-warning text-center">New </span>

                                    @else
                                    <span class="text-danger text-center">Not Approved</span>
                                    
                                    
                                    @endif
                                  </td>
                                 
                                  </tr>
                                  @endif
                                  @elseif($cat == 'Approved' || $cat == 'Disapproved')
                            
                            <tr>
                                    <th scope="row" class="text-center"> <a href="orders/{{$od->order_id}}/edit" class="link-item justify-content-center container text-dark"> {{$od->service}} 
                                  
                                    
                                    </a></th>
                                
                                  <td class="text-center">  {{$od->ocdate}} </td>
                                  <td class="text-center"> {{$od->services->price}} </td>
                                  <td class="text-center"> {{$od->paid}} </td>
                                  <td class="text-center">
                                    @if($od->approved == '1')
                                    <span class="text-success text-center">Approved</span>
                                    
                                    @elseif ($od->approved == 'new')

                                    <span class="text-warning text-center">New </span>

                                    @else
                                    <span class="text-danger text-center">Not Approved</span>
                                    
                                    
                                    @endif
                                  </td>
                                 
                                  </tr>
                                
                                  @endif
                      @endforeach
                           @endif
                          
                  
                </tbody>
          </table>
    </div>  
</body>
</html>