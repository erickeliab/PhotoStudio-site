<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/images/favicon.png') }}">
    <title>Admin|PHOTOSHOOT</title>
    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800')}}" rel="stylesheet">
    
    <link href="{{ URL::asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

     {{--  bhbjhvjhv  --}}

    <link rel="stylesheet" href="{{url('fonts/fontawesome/css/font-awesome.min.css')}}">

   <style>
    .social:hover{
        color:white;
    }


   </style>
</head>

<body class="bg-secondary">

 <main class="container bg-white">
     <div class='row col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12' id="top">
<div class="col-md-3">
        <div class="media d-block media-custom text-center">
                <a href="adoption-single.html"><img src="{{URL::asset('storage/CoverImages/logoo1.png')}}" alt="Image Placeholder" class="img-fluid thumbnail img-rounded"></a>
               
              </div>
</div>
<div class="col-md-9 container"><div class="col-md-6"><br><br> <a href="{{URL::asset('/dashboards')}}" class="btn btn-secondary btn-block btn-rounded"><h2>Dashboard</h2></a> 
    <a href="{{URL::asset('/reports')}}" class="btn btn-secondary btn-block btn-rounded"><h2>New Report</h2></a> 
    <a href="{{URL::asset('/reports/create')}}" class="btn btn-secondary btn-block btn-rounded" download><h2>Download PDF</h2></a> </div>
    <span class="col-md-3 float-right"><h2><?php echo date('d/m/y') ?></h2></span></div>
     </div>
     <hr>
     <small><i>summary</i></small>
     
     <div class='container col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12' id="header"> @include('inc.board')</div>
     <center><span class="text-secondary">Report from <i>{{$datas['datefrom']}}</i> &nbsp to <i>{{$datas['dateto']}}</i> </span></center>
     <div class='container col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12' id="table">
            <div class="table-responsive">
                    <table class="table table-hover col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12">
                          <thead>
                            <tr>
                              
                              <th scope="col" class="text-lrft font-weight-bold">Category</th>
                             
                              <th scope="col" class="text-left">No</th>
                              <th scope="col" class="text-left">Value(Tsh)</th>
                           
                            </tr>
                          </thead>      
                          <tbody>
                              <tr>
                                  <td class="center">All Orders</td>
                                  <td class="center" id="customer">{{$datas['allorders']}}</td>
                                  <td class="center" id="created_at">{{$datas['allordervalue']}}</td>
                               
                              </tr>
                              <tr>
                                    <td class="center">Approved</td>
                                    <td class="center" id="service">{{$datas['aprovednum']}}</td>
                                    <td class="center" id="created_at">{{$datas['aprovedvalue']}}</td>
                                </tr>
                                <tr>
                                        <td class="center">Not Approved</td>
                                        <td class="center" id="phone">{{$datas['nonaprovednum']}}</td>
                                        <td class="center" id="created_at">{{$datas['nonaprovedvalue']}}</td>
                                    </tr>
                                    <tr>
                                            <td class="center">Services</td>
                                            <td class="center" id="ocdate">{{$datas['allservices']}}</td>
                                            <td class="center" id="created_at">{{$datas['servicesvalue']}}</td>
                                        </tr>
                                        <tr>
                                                <td class="center">Full Paid</td>
                                                <td class="center " id='price'> {{$datas['numpaid']}}</td>
                                                <td class="center" id="created_at">{{$datas['paidfullyprice']}}</td>
                                            </tr>
                                            <tr>
                                                    <td class="center">Partial</td>
                                                    <td class="center " id='paid'>{{$datas['numpartial']}}</td>
                                                    <td class="center" id="created_at">{{$datas['paidpartialprice']}}</td>
                                                </tr>
                                            <tr>
                                                    <td class="center">Remain</td>
                                                    <td class="center" id="remain">{{$datas['numpartial']}}</td>
                                                    <td class="center" id="created_at">{{$datas['partialremain']}}</td>
                                                </tr>
                                                <tr>
                                                        <td class="center">Expens</td>
                                                        <td class="center" id="status">{{$datas['numexp']}}</td>
                                                        <td class="center" id="created_at">{{$datas['expvalue']}}</td>
                                                    </tr>
                                                    <tr>
                                                            <td class="center">Messages</td>
                                                            <td class="center" id="status">{{$datas['allmsgs']}}</td>
                                                            <td class="center" id="created_at"></td>
                                                        </tr>
                                                        <tr>
                                                                <td class="center">Total income</td>
                                                                <td class="center" id="status"></td>
                                                                <td class="center" id="created_at">{{$datas['income']}}</td>
                                                            </tr>
                                            <tr>
                                                    <td class="center">Net Profit</td>
                                                    <td class="center" id="created_at"></td>
                                                    <td class="center" id="created_at">{{$datas['profit']}}</td>
                                                </tr>
                          </tbody>
                    </table>
                </div>
     </div>
     <div class='container col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12' id="footer"></div>











 </main>
   
   <!-- BEGIN MODAL -->
   <div class="modal none-border" id="my-event">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title"><strong>Add Event</strong></h4>
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
                   <h4 class="modal-title"><strong>Order</strong> <span>{{'#'}} <p id="sp"></p></span></h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body">
                     
               </div>
               <div class="modal-footer">
                 
                   <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>
   <!-- END MODAL -->
   <script src="{{URL::asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{URL::asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{URL::asset('dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
{{--  date picker  --}}
    <script src="{{URL::asset('dist/dist/js/bootstrap-datepicker.min.js')}}"></script>
    {{--  <!-- <script src="{{URL::asset('dist/js/pages/dashboards/dashboard1.js')}}"></script> -->  --}}

    <!-- This Page JS -->
    <script src="{{URL::asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{URL::asset('dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{URL::asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <script src="{{URL::asset('assets/libs/quill/dist/quill.min.js')}}"></script>


<script>





</script>
    <script>
            //***********************************//
            // For select 2
            //***********************************//
            $(".select2").select2();
        
            /*colorpicker*/
            $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    position: $(this).attr('data-position') || 'bottom left',
        
                    change: function(value, opacity) {
                        if (!value) return;
                        if (opacity) value += ', ' + opacity;
                        if (typeof console === 'object') {
                            console.log(value);
                        }
                    },
                    theme: 'bootstrap'
                });
        
            });
        
        
            /*datwpicker*/
            jQuery('.mydatepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true,
                dateFormat: 'yy-mm--dd'
            });
            
            var quill = new Quill('#editor', {
                theme: 'snow'
            });


            var parseId = (id,phone,customer,service,price,paid,ocdate,created_at) => {
   

                document.getElementById('sp').innerText = id;
                document.cookie = "od_id = 'yes'";
                //document.getElementById('idy').setAttribute('value', + id );
            
                document.getElementById('customer').innerText = customer;
                document.getElementById('service').innerText = service;
                document.getElementById('price').innerText = price;
                document.getElementById('phone').innerText = phone;
                document.getElementById('paid').innerText = paid;
                let remain = price - paid;
            
                let status = 'Not Paid';
                if (paid == price ) {
                     status = 'Paid';
                }
                 else if (paid == 0) {
                    status = 'Not Paid';
                } 
                else if (paid < price) {
                    status = 'Partial';
                } 
                else {
                     status = 'Has credits';
                }
                document.getElementById('status').innerText = status;
            
                document.getElementById('remain').innerText = remain;
                document.getElementById('ocdate').innerText = ocdate;
                document.getElementById('created_at').innerText = created_at;
             
            
             };
        
        </script>
</body>

</html>
