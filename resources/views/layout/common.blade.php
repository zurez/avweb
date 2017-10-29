<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Govt. of Bihar</title>

  

    
    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
      <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    

    
</head>

<body>

    <div id="wrapper" style="background:url('{{asset('img/rough_diagonal.png')}}');">
     
     
                     <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom:0')">
                <div class="navbar-header" style="">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="index')}}"><img src="{{asset('img/sb.png')}}" class="img-responsive" alt="Home" height="50" width="50"></a>
                <a class="navbar-brand" href="index')}}"><i class="hidden-xs"><img src="{{asset('img/top-welfare1.jpg')}}" class="img-responsive" alt="Home" width="275"></i></a>
                <a class="navbar-brand" href="index')}}"><img src="{{asset('img/NSAP1.png')}}" class="img-responsive" alt="NSAP" height="60" width="60"></a>
                <a class="navbar-brand" href="index')}}" style= "color:#dfdfdf; text-shadow:1px 1px Black; padding-bottom:0px;padding-top:15px">
                    <b class="hidden-xs"><p style="font-size:20px">NATIONAL</p>
                        <p style="font-size:16px">SOCIAL&nbsp;&nbsp; ASSISTANCE&nbsp;&nbsp; PROGRAMME</p>
                    </b>
                </a>
                </div>
            <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right" style="margin-right:10px">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary"><i class="fa fa-home"></i>&nbsp;<b class="hidden-xs">Home</b></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-tasks"></i>&nbsp;<b class="hidden-xs">Schemes</b></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-support"></i>&nbsp;<b class="hidden-xs">Help</b></button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-user"></i>&nbsp;<b class="hidden-xs">Logout</b></button>
                    </div>
             
                </ul>
            <!-- /.navbar-top-links -->

                
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{url('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> DASHBOARD</a>
                        </li>
                        <li>
                            <a href="{{url('aadhaar')}}"><i class="fa fa-check fa-fw"></i> AADHAAR VALIDATION</a>
                        </li>
                        <li>
                            <a><i class="fa fa-table fa-fw"></i> PENSION SCHEDULER<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('pension_auto')}}">AUTOMATIC</a>
                                </li>
                                <li>
                                    <a href="{{url('pension_manual')}}">MANUAL</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('payment_folder')}}"><i class="fa fa-edit fa-fw"></i> PAYMENT FOLDER</a>
                        </li>
                        <li>
                            <a href="{{url('reports')}}"><i class="fa fa-book fa-fw"></i> REPORTS</a>
                            
                        </li>
                        <li>
                            <a href="{{url('passbook')}}"><i class="fa fa-archive fa-fw"></i> E-PASSBOOK</a>
             
                        </li>
                        <li>
                            <a href="{{url('allotment')}}"><i class="fa fa-arrow-circle-o-up fa-fw"></i> ALLOTMENT</a>
   
                        </li>
                                                <li>
                            <a href="http://www.icicibank.com"><i class="fa fa-link fa-fw"></i> PFMS-BANK DASHBOARD</a>
   
                        </li>
                                                <li>
                            <a href="{{url('uc')}}"><i class="fa fa-trello fa-fw"></i> UC</a>
   
                        </li>
                                                <li>
                            <a href="{{url('sanction')}}"><i class="fa fa-briefcase fa-fw"></i> SANCTION</a>
   
                        </li>
                                                <li>
                            <a href="{{url('sanct_allot')}}"><i class="fa fa-book fa-fw"></i> SANCTION & ALLOTMENT</a>
   
                        </li>
                        <li>
                        <a href="http://www.bihar.gov.in"> <img src="{{asset('img/bihar-district-map.png')}}" class="img-responsive" style="width=120px; height:80px"></a>
                        </li>
                    </ul>
                </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
        
            <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">   
                <div class="navbar-footer" style="font-family: Verdana; margin-top:10px; margin-left:10px;">
                    <a href="#" style="color:#000">Terms of Service</a> | <a href="#" style="color:#000">Privacy</a>
                        &nbsp;© 2017 ICICI Bank. All rights reserved
                </div>
                <a href="http://www.icicibank.com" class="pull-right">
                    <img src="{{asset('img/image.jpg')}}" style="height:20px; margin-right:10px; margin-top:-30px">
                </a>
            </nav>
            <!---navigation -->


     
        <div id="page-wrapper" style="background:url('{{asset('img/rough_diagonal.png')}}');">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Dashboard</h4>
                </div>
            </div>
            @yield("content")
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    
    <!-- Charts JavaScript -->
    <script type="text/javascript" src="{{asset('js/chart.js')}}"></script>
    <!-- Use this for editing chart data -->
    <script type="text/javascript" src="{{asset('js/graphs.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
        <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('js/metisMenu.min.js')}}"></script>
    


</body>

</html>
