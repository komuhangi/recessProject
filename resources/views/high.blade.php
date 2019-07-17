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
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse" style="background-color: #999">
                <ul class="nav" id="main-menu" style="background: #3980b5">
				<li class="text-center" style="background: #3980b5">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li style="background-color: rgb(0, 85, 182)">
                        <a href="/" style="background: #3980b5;"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a   href="/high" style="background: #104075;"><i class="fa fa-desktop fa-3x"></i> Hierarchy</a>
                    </li>
                        <li>
                        <a  href="/payment" style="background: #3980b5"><i class="fa fa-qrcode fa-3x"></i> Payments</a>
                    </li>
                   
						   <li  >
                        <a   href="/stat" style="background: #3980b5"><i class="fa fa-bar-chart-o fa-3x"></i> Statistics</a>
                    </li>	
                      <li  >
                        <a  href="/record" style="background: #3980b5"><i class="fa fa-table fa-3x"></i> Records</a>
                    </li>
                    <li  >
                        <a  href="/upgrade" style="background: #3980b5"><i class="fa fa-edit fa-3x"></i> Upgrade</a>

                    </li>
                    <li  >
                            <a  href="/newuser" style="background: #3980b5"><i class="fa fa-edit fa-3x"></i> New record</a>
                        </li>
                    <li >
                        <a  href="/newdist" style="background: #3980b5"><i class="fa fa-edit fa-3x"></i> New District</a>
                    </li>				
			
                </ul>
               
            </div>
            
        </nav> 
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Hierarchy</h2>   
                        <h5>Welcome Lwanga Aksam , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      <div class="col-md-7" style="width: 900px">
                    <div class="panel panel-default" style="width: 900px">
                        <div class="panel-heading" style="width: 900px">
                          <?php
                          $connect = mysqli_connect('localhost','root','','UTFES_database' );
                          $resultset =$connect->query("SELECT id,name FROM districts");
                          global $color;
                          $connect = mysqli_connect('localhost','root','','UTFES_database' );
                          $resultset =$connect->query("SELECT id, name FROM districts");

                          $color1="lightblue";
                          $color2="blue";
                          $color3=$color1;

                          ?>
                         Select District to view <select name="district" id="id" style="float: right";">
                          <?php 
                          while ($rows = $resultset->fetch_assoc())
                          {
                            $color==$color1 ? $color=$color2:$color=$color1;
                            $name = $rows['name'];
                          echo"<option  value=".$rows['id']." style='background:$color;'> $name </option>";
                          }
                          ?>                          
                         </select>
                        </div>
                            <div class="panel" style="height: 350px;width: 500px;">
                              <ul>
                                <li>Administrator

                                  <ul>
                                    <li>$userName</li>
                                  </ul>
                                </li>
                              </ul>
                            
                             
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
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
<img src="assets/img/hierachy.png" style="width:auto;height:420px;padding-left:15%;margin-top:0px;padding-top: 0 "> 
                           <ul>
                              <li>Administrator</li>
                              <ul>
                                <li>Agent Head</li>
                                <ul>
                                  <li>Agent stoni</li>
                                 
                                  <li>Agent levers</li>
                                  
                                  <li>Agent winschott</li>
                                  
                                  <li>Agent aple</li>
                                </ul>

                              </ul>

                            </ul>