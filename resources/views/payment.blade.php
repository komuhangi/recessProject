
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
            <!-- FONTAWESOME STYLES-->
            <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <!-- MORRIS CHART STYLES-->
            <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
            <!-- CUSTOM STYLES-->
            <link href="assets/css/custom.css" rel="stylesheet" />

        <!-- Styles -->
        <style>
          
          
        </style>
    </head>
    <body>
      <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;background-color: rgb(0, 162, 255)">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="background: #2970b5" >Administrator</a> 
            </div>
            
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;background-color: "> Last access : <script>document.write(Date());</script> &nbsp; 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-pre>
                                   <b class="btn btn-danger square-btn-adjust"> {{ Auth::user()->name }}</b> <span class="caret"></span>
                                </a>
                                 
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <b  >  {{ __('Logout') }} </b>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                            
                  </div>                  
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse" style="background-color: #999">
                <ul class="nav" id="main-menu" style="background: #3980b5">
        <li class="text-center" style="background: #3980b5">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
        
          
                    <li style="background-color: rgb(0, 85, 182)">
                        <a href="/" style="background: #3980b5;"><i class="glyphicon glyphicon-home fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a   href="/high" style="background: #3980b5;"><i class="fa fa-desktop fa-3x"></i> Hierarchy</a>
                    </li>
                        <li>
                        <a  href="/payment" style="background: #104075;"><i class="fa fa-qrcode fa-3x"></i> Payments</a>
                    </li>
                     <li>
                        <a  href="/reports" style="background: #3980b5"><i class="fa fa-qrcode fa-3x"></i> Reports</a>
                    </li>
                   
                   
               <li  >
                        <a   href="/stat" style="background: #3980b5"><i class="fa fa-bar-chart-o fa-3x"></i> Statistics</a>
                    </li> 
                      <li  >
                        <a  href="/record" style="background: #3980b5"><i class="fa fa-table fa-3x"></i> Records</a>
                    </li>
                    <li  >
                        <a  href="/member" style="background: #3980b5"><i class="fa fa-table fa-3x"></i> Members</a>
                        
                    </li>
                    <li  >
                        <a  href="/upgrade" style="background: #3980b5"><i class="fa fa-edit fa-3x"></i> Upgrade</a>
                    </li>       
              <li  >
                        <a  href="/newuser" style="background: #3980b5"><i class="fa fa-edit fa-3x"></i> New record</a>
                    </li> 
                    <li  >
                            <a  href="/newdist" style="background: #3980b5"><i class="fa fa-edit fa-3x"></i> New District</a>
                        </li> 
                </ul>
                </ul>
               
            </div>
          
            
        
            @if(session('success'))
            
                   <script>window.alert('{{session('success')}}')  </script>
            @endif
        </nav>   

         <!-- /. NAV SIDE  -->
         <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PAYMENTS </h2>   
                        <h5>Welcome Lwanga Aksam , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                      <ul>  <li>{{ $error }}</li></ul>
                    </div>
                @endforeach 
                    <!-- /. ROW  -->
                    <div class="row">
                      <div class="col-md-8">
                        <caption>FUNDS REGISTRATION</caption>
                         <form action="/newpayment" method="post"style="padding-left:100px;">
                              {{ csrf_field() }}
                               <div class="form-group">
                                 <label for="">Source of funds:</label>
                                 <input type="text"
                                 class="form-control" name="source" id="" aria-describedby="helpId" placeholder="Enter the name of the organisation/individual ">
                                </div>
                                 
                                <div class="form-group">
                                 <label for="">Amount :</label>
                                 <input type="number"
                                 class="form-control" name="amount" id="" aria-describedby="helpId" placeholder="Enter the amount recieved by the organisation">
                                </div>
                             
                                <div class="form-group">
                                  <label for="">date recieved:</label>
                                  <input type="date" 
                                  class="form-control" name="date" id="" aria-describedby="helpId" placeholder="Enter the month the amount is recieved" >

                                </div>
                                <div class="form-group">
                                 <label for="">District of the sponsor</label>
                                 <input type="text"
                                 class="form-control" name="district" id="" aria-describedby="helpId" placeholder="district of the sponsor">
                                 <small id="helpId" class="form-text text-muted">This field is optional</small>
                                </div>

                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                          </form>
                          <br><br>
                       </div>
                    
                        <div class="col-md-7" style="width: 900px">
                          <div class="panel panel-default" style="width: 900px">
                            <h2 style="text-align: center">Payroll statement as {{date('d-m-y')}}</h2>
                            <div class="table-responsive">
                                    <table class="table" border="4">
                                        <tr style="background-color: #3980f8;color:#fff">
                                               
                                            <th>role </th>
                                            <th>Number of users </th>
                                            <th>Amount (UGX)</th>
                                            <th>Total Amount (UGX)</th>
                                        </tr>
                                        <tr>
                                            <td>Administrator </td>
                                            <td>1</td>
                                            <td>{{number_format($amountagent/2,0)}}</td>
                                            <td>{{number_format($amountagent/2,0)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Agent head </td>
                                            <td>{{$remaininghead}} </td>
                                            <td>{{number_format($amountagent*(7/4),0) }}</td>
                                            <td>{{number_format($amountagent*(7/4)*$remaininghead,0)}} </td>
                                        
                                        </tr>
                                        <tr>
                                                <td> Agent  </td>
                                                <td>{{$remainingagent}}</td>
                                                <td>{{number_format($amountagent,0)}}  </td>
                                                <td>{{number_format($amountagent*$remainingagent,0) }}</td>
                                                
                                        </tr>
                                        <tr>
                                                <td> Agent with highest enrollment </td>
                                                <td>{{$noagentsinhigh}} </td>
                                                <td>{{number_format(2*$amountagent,0)}}</td>
                                                <td>{{number_format(2*$amountagent * $noagentsinhigh ,0)}}</td>
                                                
                                        </tr>
                                        <tr>      
                                                <td>Agent head with highest enrollment</td>
                                                <td>1</td>
                                                <td>{{number_format((7/2)*$amountagent,0)}}</td>
                                                <td>{{number_format((7/2)*$amountagent,0)}}</td>
                                                
                                        </tr>
                                    </table>




                                </div>

                                 
                            </div>


                            
                        </div>

                    </div>

                  </div>
            

                   <!-- /. ROW  -->

                    
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    </body>
    </html>