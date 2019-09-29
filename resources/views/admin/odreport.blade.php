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
              <th scope="col" class="text-center">No</th>
               <th scope="col" class="text-center">User</th>
               <th scope="col" class="text-center">Date</th>
               <th scope="col" class="text-center">Service</th>
               <th scope="col" class="text-center">Price</th>
               <th scope="col" class="text-center">Amount</th>
                <th scope="col" class="text-center">Balance Before</th>
                <th scope="col" class="text-center">Balance After</th>
              
              
              </tr>
            </thead>
            <tbody>
                  @if(count($disy) > 0 )

                  @foreach($disy as $od)

              
                 
                  <tr>
                          <td class="text-center">{{$od->id}}</td>
                          <td class="text-center">{{$od->users->name}}</td>
                          <td class="text-center">{{$od->created_at}}</td>
                          <td class="text-center">{{$od->orders->services->serv_name}}</td>
                          <td class="text-center">{{$od->orders->services->price}}</td>
                          <td class="text-center">{{$od->amount}}</td>
                          <td class="text-center">{{$od->balance_before}}</td>
                          <td class="text-center">{{$od->balance_after}}</td>
                       
                       
                        </tr>
                      
                      
                            
                  @endforeach
                       @endif
                      
              
            </tbody>
      </table>
        </div>
</body>
</html>