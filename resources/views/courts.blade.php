<!DOCTYPE html>
<!--
	xBe by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Courts</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="../css/style.css">

    <!-- Custom Fonts -->

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Animations -->

    <link rel="stylesheet" href="css/animate.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Mono&display=swap');

        .navbar {
            background-color: black;
            overflow: hidden;
            margin-top: 0;
            font-family: 'Space Mono';
        }

        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 27px;
        }

        .navbar-right {
            float: right;
        }

        .navbar .navbar-right a:hover {
            transition: 0.3s;
            border-bottom: 3px solid whitesmoke;
            margin: 3px;
        }

        .navbar .navbar-right .underline-select {
            text-decoration: underline;
            text-decoration-color: white;
        }
    </style>

</head>

<body>
    <!-- HEADER section -->
    <div class="navbar">
        <a href="/">SPORTOPEDIA</a>
        @auth
        <div class="navbar-right">
            <a href="/profileUser">PROFILE</a>
            <a href="/mybookings">BOOKINGS</a>
            <a class="underline-select" href="/courts">COURTS</a>
        </div>
        @endauth
    </div>

    <!-- The Courts Section -->
    <section id="services">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="heading"></h2>
                    <h3 class="subheading"></h3>
                </div>
            </div>
            <div class="row text-center">
                <!--First row services-->
                <div class="row first-services">
                    <div class="col-sm-12 col-md-4 service">
                        <form action="{{route('basketballBooking')}}">
                            <img src="{{url('/img/basketball.png')}}">
                            <h4 class="service-heading">BASKETBALL</h4>
                            <p class="text-services">RM10 per hour</p>
                            <input type="submit" value="BOOK COURT" class="btn btn-xl">
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-4 service">
                        <form action="{{route('badmintonBooking')}}">
                            <img src="{{url('/img/badminton.png')}}">
                            <h4 class="service-heading">BADMINTON</h4>
                            <p class="text-services">RM10 per hour</p>
                            <input type="submit" value="BOOK COURT" class="btn btn-xl">
                        </form>
                    </div>
                    
                    <div class="col-sm-12 col-md-4 service">
                        <form action="{{route('futsalBooking')}}">
                            <img src="{{url('/img/futsal.png')}}">
                            <h4 class="service-heading">FUTSAL</h4>
                            <p class="text-services">RM10 per hour</p>
                            <input type="submit" value="BOOK COURT" class="btn btn-xl">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>