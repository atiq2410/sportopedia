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

    <title>Sportopedia</title>

    <!-- Bootstrap Core CSS -->

    <link href="../css/bootstrap.css" rel="stylesheet">

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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Mono&display=swap');
        body {
            background-image: url(../img/bg-homepage.png);
            background-size: 100%;
        }

        .title {
            padding: 200px;
            align-content: center;
        }
        h2 {
            font-family: 'Space Mono';
            font-size: 100px;
            color: white;
        }
        p {
            font-size: 30px;
            color: white;
        }
    </style>

</head>

<body>
    <!-- HEADER -->
    <header id="header">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid top-nav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <!-- <a class="navbar-brand logo-top page-scroll" href="#header">
                        <img class="img-responsive"  src="img/logo.png" alt="logo">
                    </a> -->
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="{{route('login')}}" class="btn btn-xl">LOGIN</a>
                        <a href="{{route('register1')}}" class="btn btn-xl">REGISTER</a>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <div class="title">
        <h2 class="intro-heading animated bounceInRight">SPORTOPEDIA</h2>
        <p class="intro-paragraph animated bounceInRight">Simple way to enjoy sports</p>
        <a href="/aboutUs" class="btn btn-xl">BOOK NOW</a>
    </div>
    

</html>