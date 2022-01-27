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

    <title>About Us</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="../css/style.css">

    <!-- Custom Fonts -->

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Space+Mono&display=swap' rel='stylesheet' type='text/css'>

    <!-- Custom Animations -->

    <link rel="stylesheet" href="css/animate.css">

</head>

<body>
    <!-- About Us Section -->
    <section id="services">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <h2 class="heading">ABOUT US</h2>
                    <h3 class="subheading">Sportopedia is a platform that helps users
                        to book to use any sport court easily.</h3>
                </div>
            </div>
            <div class="row text-center">
                <!--First row services-->
                <!-- <div class="row first-services"> -->
                <div class="col-sm-12 col-md-4 service">
                    <img src="{{url('/img/login.png')}}">
                    <h4 class="service-heading">MEMBER LOGIN</h4>
                    <p class="text-services">Login to manage booking and see points collected!</p>
                    <a href="{{route('login')}}" class="btn btn-xl">GO TO LOGIN</a>
                </div>
                <div class="col-sm-12 col-md-4 service">
                    <img src="{{url('/img/register.png')}}">
                    <h4 class="service-heading">REGISTRATION</h4>
                    <p class="text-services">Register to receive more benefits from us now!</p>
                    <a href="{{route('register1')}}" class="btn btn-xl">REGISTER NOW!</a>
                </div>
                <div class="col-sm-12 col-md-4 service">
                    <img src="{{url('/img/court.png')}}">
                    <h4 class="service-heading">COURTS</h4>
                    <p class="text-services">Take a look at the available courts and book!</p>
                    <a href="/courts" class="btn btn-xl">GO TO COURTS</a>
                </div>
                <!-- </div> -->

            </div>
        </div>
    </section>
</body>