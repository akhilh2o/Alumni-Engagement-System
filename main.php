<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home || Alumni Engagement System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="style.css" /> -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Raleway);
        #cssmenu,
        #cssmenu ul,
        #cssmenu ul li,
        #cssmenu ul li a {
            margin: 0;
            padding: 0;
            border: 0;
            list-style: none;
            line-height: 1;
            display: block;
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        #cssmenu:after,
        #cssmenu>ul:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }
        
        #cssmenu {
            width: auto;
            border-bottom: 5px solid #1B346C;
            font-family: Raleway, sans-serif;
            line-height: 1;
        }
        
        #cssmenu ul {
            background: #ffffff;
        }
        
        #cssmenu>ul>li {
            float: left;
        }
        
        #cssmenu.align-center>ul {
            font-size: 0;
            text-align: center;
        }
        
        #cssmenu.align-center>ul>li {
            display: inline-block;
            float: none;
        }
        
        #cssmenu.align-right>ul>li {
            float: right;
        }
        
        #cssmenu.align-right>ul>li>a {
            margin-right: 0;
            margin-left: -4px;
        }
        
        #cssmenu>ul>li>a {
            z-index: 2;
            padding: 18px 25px 12px 25px;
            font-size: 15px;
            font-weight: 400;
            text-decoration: none;
            color: #444444;
            -webkit-transition: all .2s ease;
            -moz-transition: all .2s ease;
            -ms-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease;
            margin-right: -4px;
        }
        
        #cssmenu>ul>li.active>a,
        #cssmenu>ul>li:hover>a,
        #cssmenu>ul>li>a:hover {
            color: #ffffff;
        }
        
        #cssmenu>ul>li>a:after {
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -1;
            width: 100%;
            height: 120%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            content: "";
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease;
            -webkit-transform: perspective(5px) rotateX(2deg);
            -webkit-transform-origin: bottom;
            -moz-transform: perspective(5px) rotateX(2deg);
            -moz-transform-origin: bottom;
            transform: perspective(5px) rotateX(2deg);
            transform-origin: bottom;
        }
        
        #cssmenu>ul>li.active>a:after,
        #cssmenu>ul>li:hover>a:after,
        #cssmenu>ul>li>a:hover:after {
            background: #1B346C;
        }
        
        .container-fluid {
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body>
    <div class="container-fluid">




        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="images/slide (4).jpg" alt="Los Angeles" style="width:100%; height: 300px;">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/slide (5).jpg" alt="Chicago" style="width:100%; height: 300px;">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/slide (7).jpg" alt="New York" style="width:100%; height: 300px;">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <div id='cssmenu'>
        <ul>
            <li class='active'><a href='Home.html'>Home</a></li>
            <li><a href='aboutme.html'>Professor</a></li>
            <li><a href='ContactUs.html'>Organization</a></li>
            <li><a href='fundraisingmain.html'>Donation</a></li>
            
            <p class="text-right">
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </p>
        </ul>

    </div>

    <div class="container-fluid">

        <div class="jumbotron ">
            <h2 class="display-4 text-center">Welcome To Alumni ES !</h2>
            <p class="lead text-center"><small>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</small></p>
            <hr class="my-5">
            <p class="text-center">
                <small><em>It uses utility classes for typography and spacing to space content out within the larger container.</em></small>
            </p>
            <p class="text-center">
                <a class="btn btn-primary btn-lg " href="ContactUs.html" target="blank" role="button">Know More</a>
            </p>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Welcome to Home Page </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aperiam maxime commodi odit excepturi cupiditate accusamus minus ducimus omnis corrupti. Et delectus magnam deserunt molestiae culpa voluptatem, possimus pariatur illo!

            </div>
            <div class="col-sm-4">


                <h2>Accordion Example</h2>
                <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <h1>This is second Div of main div</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>



        </div>
    </div>




    <!-- --------------footer--------------------- -->

    <div class="container-fluid footer " style="background:#1b346c;padding-left: 90px;color: white;height:auto;padding: 50px 200px 20px 200px; ">
        <div class="row ">
            <div class="col-sm-3 ">
                <h4 class="text-justify text-uppercase ">
                    <i class="fa fa-search "></i> Browser</h4>
                <hr>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">By Directary</a>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">By Search</a>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">By Resourchs</a>
                <br>

            </div>
            <div class="col-sm-3 ">
                <h4 class="text-justify text-uppercase ">
                    <i class="fas fa-graduation-cap "></i> Career</h4>
                <hr>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">Job</a>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">Internship</a>
                <br>

            </div>
            <div class="col-sm-3 ">
                <h4 class="text-justify text-uppercase ">
                    <i class="fa fa-calendar-check-o " aria-hidden="true "></i> Events</h4>
                <hr>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">Sansmaran 2018</a>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">NITIE hyderabad 2018</a>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">NITIE Delhi NCR2018</a>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">All Events</a>
                <br>

            </div>
            <div class="col-sm-3 ">
                <h4 class="text-justify text-uppercase ">
                    <i class="fa fa-address-book " aria-hidden="true "></i> Contact</h4>
                <hr>
                <span>Email:</span>
                <br>
                <a href=" ">guptaakhilesh978@gmail.com</a>
                <br>
                <span>Phone:</span>
                <br>
                <a href=" ">+918115630517/+919628223251</a>
                <br>
                <br>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" "> Privacy Policy </a>
                <br>
                <i class="fa fa-forward " aria-hidden="true "></i>
                <a href=" ">Term of Use</a>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div class="container-fluid " style="background:white;height: 50px;padding:20px 100px 10px 100px; ">
        <div class="row ">
            <div class="col-sm-4 text-left ">
                <i class="fas fa-copyright "> Copyright 2018</i>
            </div>
            <div class="col-sm-4 text-center ">
                <a href="# " class="fa fa-facebook "></a>
                <a href="# " class="fa fa-twitter "></a>
                <a href="# " class="fa fa-google "></a>
                <a href="# " class="fa fa-linkedin "></a>
                <a href="# " class="fa fa-youtube "></a>
                <a href="# " class="fa fa-instagram "></a>
                <a href="# " class="fa fa-pinterest "></a>
                <a href="# " class="fa fa-snapchat-ghost "></a>
                <a href="# " class="fa fa-skype "></a>
                <a href="# " class="fa fa-android "></a>
                <a href="# " class="fa fa-dribbble "></a>
                <a href="# " class="fa fa-vimeo "></a>
                <a href="# " class="fa fa-tumblr "></a>


            </div>
            <div class="col-sm-4 text-right ">
                <span>Alumni Software Provided By:</span>
                <a class="text-primary " href="https://www.facebook.com/flyingakhil ">
                    <i class="fa fa-facebook-official " aria-hidden="true "> Akhilesh Gupta</i>
                </a>

            </div>
        </div>

    </div>



</body>

</html>