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

    <title>Member Login</title>

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

    <style>
        .navbar {
            overflow: hidden;
            margin-top: 0;
            font-family: 'Space Mono';
        }

        .navbar a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 27px;
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- HEADER section -->
                    <div class="navbar">
                        <a href="/">SPORTOPEDIA</a>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container-fluid wrapper">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h2 class="heading">MEMBER LOGIN</h2>
                </div>
                <div class="col-md-6">
                    <div class="company-address col-sm-6 col-md-6">
                        <address>

                            <br>
                            <span id="map-input">

                            </span>
                            <br>
                        </address>
                    </div>
                    <div class="company-contact col-sm-6 col-md-6">
                        <address>NOT A MEMBER?
                            <br>
                            <a href="{{ route('register1')}}">REGISTER</a>
                        </address><br>
                        <address>OR
                            <br>
                            <a href="{{ route('login-staff')}}">LOGIN AS STAFF</a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{route('login-store')}}" method="post">
                        @csrf

                        @if(session('error'))
                        <p class="alert alert-danger">{{session('error')}}</p>
                        @endif
                        <div class="row">
                            <div class="col-md-6 contact-form-box">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                                    @error('username')
                                    <p class="help-block text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <p class="help-block text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <center><button type="submit" class="btn btn-xl">LOGIN</button></center>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>