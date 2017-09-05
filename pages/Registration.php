<!DOCTYPE HTML>

<html>
<head>
<title>digital kosha</title>
<link rel="icon" type="img/png" href="../images/digitalkosha.png"/>    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="../css/style.css" rel='stylesheet' type='text/css'/>
    <!-- Graph CSS -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="../css/icon-font.css" type='text/css'/>
    <!-- //lined-icons -->
    <!-- Meters graphs -->
    <script src="../js/jquery-2.1.4.js"></script>
    
    <script type="text/javascript" src="../js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="../js/validation.min.js"></script>
    <script type="text/javascript" src="../js/regScript.js"></script>

    <!--Awesomeplete-->
    <link href="../css/awesomplete.base.css" rel="stylesheet">
    <link href="../css/awesomplete.css" rel="stylesheet">
    <script src="../js/awesomplete.js"></script>
    <script src="../js/awesomplete.min.js"></script>
    <!--End Awesomeplete-->
    
    <script type="text/javascript" src="../js/notie/notie.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <!--Page Styling-->
    <style>


        .input-group {
            height: inherit;
            width: 100%;
            border-radius: 50px;

        }

        .form-control {
            width: 100%;
            border-radius: 25px;
        }

        .panel {
            background: #f2f2f2;
        }

        input {
            background: #f2f2f2;
            border-radius: 50px;
        }

         input.ng-invalid {
             border-color: red;
         }
        input.ng-valid {
            border-color: green;
        }

    </style>
    <link rel="stylesheet" href="../css/bootstrap-iso.css">
    
    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.names = ["Male", "Female", "Other"];
        });
    </script>

    <link rel="stylesheet" href="../css/Login.css">

    <!--End Page Styling-->
</head>

<body class="sticky-header left-side-collapsed" ng-app="myApp">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <h1><a href="../index.php">Digital<span>Kosha</span></a></h1>
        </div>
        <div class="logo-icon text-center">
            <a href="../index.php">dk </a>
        </div>
        <!-- /Side bar behavoir -->
        <!--logo and iconic logo end-->
        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="../index.php"><i class="lnr lnr-home"></i><span>Home</span></a></li>
                <li><a href="#"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>
                <li><a href="#"><i class="lnr lnr-users"></i> <span>Artists</span></a></li>

                <li><a href="#"><i class="lnr lnr-book"></i><span>Latest News</span></a></li>
                <li class="menu-list"><a href="#"><i class="fa fa-user"></i> <span>My Account</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Favourites</a></li>
                        <li><a href="#"> Profile</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href="contact.html"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#">Location</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->
        </div>
    </div>

    <!-- main content start-->
    <div class="main-content">
        <!-- header-starts -->
        <div class="header-section">
            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->
            <!--notification menu start -->
            <div class="menu-right">
                <div class="profile_details">
                    <div class="col-md-4 serch-part">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Search" type="search" name="search"
                                       id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <!-- search-scripts -->
                    <script src="../js/classie.js"></script>
                    <script src="../js/uisearch.js"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>
                    <!-- //search-scripts -->

                    <!--Audio Player-->
                    <div class="col-md-4 ">

                        <ul class="myNav">
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Artists</a></li>
                            <li><a href="#">Top Charts</a></li>
                        </ul>

                    </div>
                    <div class="col-md-4 login-pop">
                        <div id="loginpop">
                            <a href="Login.php" id="loginBtn"><span>Login
                                <i class="arrow glyphicon glyphicon-log-in"></i></span></a> &nbsp;

                            <a class="" id="RegButton" href="Registration.html"><span>Sign Up
                                <i class="arrow fa fa-plus  fa fa-2x"></i></span></a>

                            <button  class="" style="color: #EA57A3;background-color: #0b0b0b;border-radius: 10px; visibility:hidden;" id="" href="#" ><span>
                                <i class=" fa fa-power-off  fa fa-2x"></i></span>
                            </button>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--notification menu end -->
        <!-- //header-ends -->

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 ">
                        <div class="panel-heading">
                            <legend><h1 class="tittle">Registration</h1></legend>

                        </div>
                        <section>
                            <form method="post" action="" id="reg-form">
                               
                                <div class="form-group">
                                    <label class="control-label requiredField">
                                        Username

                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" style="border-radius: 25px;" name="username" ng-model="username"
                                               type="" required="required"/>
                                       
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="control-label requiredField">
                                        Name

                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" style="border-radius: 25px;" name="name" ng-model="name"
                                               type="" required="required"/>
                                        <!--<div class="input-group-addon">-->
                                        <!--<i class="fa fa-user">-->
                                        <!--</i>-->
                                        <!--</div>-->
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="control-label requiredField" for="surname">
                                        Surname
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" id="surname" style="border-radius: 25px;"  name="surname" ng-model="surname"
                                               type="" required="required"/>
                                        <!--<div class="input-group-addon">-->
                                        <!--<i class="fa fa-user">-->
                                        <!--</i>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="email">
                                        Email
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" id="email" style="border-radius: 25px;" name="email"
                                               type="email" required="required" ng-model="email"/>
                                        <!--<div class="input-group-addon">-->
                                        <!--<i class="fa fa-envelope-o">-->
                                        <!--</i>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="contact">
                                        Mobile Number

                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" id="contact" style="border-radius: 25px;" name="contact"
                                               type="tel" required="required" ng-model="contact" />

                                    </div>
                                </div>
                                <div class="form-group " ng-controller="myCtrl">
                                    <label class="control-label requiredField" for="gender">
                                        Select a Gender
                                    </label>
                                    <select class="select form-control" ng-model="gender" ng-options="item for item in names"  id="gender" name="gender"
                                            required="required">
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="txtPass1">
                                        Password
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" id="txtPass1" style="border-radius: 25px;" name="txtPass1"
                                               type="password" required="required" ng-model="txtPass1" />
                                        <!--<div class="input-group-addon">-->
                                        <!--<i class="fa fa-lock">-->
                                        <!--</i>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label requiredField" for="password">
                                        Confirm Password
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control" id="txtPass2" style="border-radius: 25px;" name="password"
                                               type="password" required="required" ng-model="password"/>
                                        <!--<div class="input-group-addon">-->
                                        <!--<i class="fa fa-lock">-->
                                        <!--</i>-->
                                        <!--</div>-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div style="align-content: center;margin-left: 8.5em;margin-right: 6em; position: relative;">
                                        <button style="width: 80%;" class="btnReg" id="btn_reg" name="btn_reg" type="submit">
                                        Register
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
    <!--body wrapper end-->
    <div class="footer">

        <!--footer section start-->
        <footer>
            <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts
                & <4 Tier/> </a></p>
        </footer>
        <!--footer section end-->
    </div>
    <!-- main content end-->
</section>

<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.js"></script>
</body>

</html>