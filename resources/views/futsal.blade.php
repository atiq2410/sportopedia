<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Badminton Court</title>

    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">

    <!-- Custom Fonts -->

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Animations -->

    <link rel="stylesheet" href="css/animate.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Mono&display=swap');

        body {
            background-color: lightgrey;
            padding-bottom: 50px;
        }

        h1 {
            font-family: 'Space Mono';
            padding-top: 20px;
        }

        img {
            height: 50%;
            width: 50%;
        }

        .navbar {
            font-family: 'Space Mono';
            background-color: black;
            overflow: hidden;
            margin-top: 0;
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

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .button {
            margin: 5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: black;
            color: white;
            width: fit-content;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: bold;
            border: none;
            border-radius: 3px;
            text-align: center;
            transition: 0.3s;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Space+Mono&display=swap');

        body {
            margin: 0;
            background-color: #dfdfdf;
            font-family: 'Space Mono', monospace;
        }

        .navbar {
            background-color: black;
            overflow: hidden;
            margin-top: 0;
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

        .main {
            display: flex;
            margin-top: 30px;
            width: 100%;
        }

        .main-left {
            padding: 10px;
            width: 50%;
            font-size: 60px;
            text-align: center;
        }

        .main-left .plan-image {
            text-align: center;
        }

        .main-left .plan-image img {
            height: 490px;
            width: 318px;
        }

        .main-left .court-detail {
            font-family: 'Inter', sans-serif;
            font-size: 30px;
            font-weight: bold;
        }

        .main-right {
            padding-top: 30px;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: 500;
            flex-grow: 1;
            text-align: left;
        }

        .main-right label {
            font-style: normal;
            margin: 5px;
        }

        .main-right input {
            margin: 1px;
            width: 90%;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            border: none;
            border-radius: 3px;
        }

        .main-right .button-submit {
            margin: 5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: black;
            color: white;
            width: fit-content;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: bold;
            border: none;
            border-radius: 3px;
            text-align: center;
            transition: 0.3s;
        }

        .main-right .button-submit:hover {
            margin: 5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: black;
            color: white;
            width: fit-content;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: bold;
            border: none;
            border-radius: 3px;
            text-align: center;
            opacity: 0.5;
        }
    </style>

    <head>
        <title>Sportopedia</title>
    </head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="/">SPORTOPEDIA</a>
        <div class="navbar-right">
            <a href="{{route('profileUser')}}">PROFILE</a>
            <a class="underline-select" href="{{route('myBookings')}}">BOOKINGS</a>
            <a href="{{route('courts')}}">COURTS</a>
        </div>
    </div>

    <!-- Content Placement -->
    <div class="main">
        <!-- Make Booking left side -->
        <div class="main-left">
            <div>BOOK A COURT</div>
            <div class="plan-image"><img src="../img/futsal-court.png" alt="futsal-court-plan-view"></div>
            <div class="court-detail">
                <b>FUTSAL COURT</b><br>
                <!-- Here later is edited through the database -->
            </div>
        </div>

        <!-- Make booking right side -->
        <div class="main-right">
            <form action="{{route('futsal-store')}}" method="post">
                @csrf
                <br>
                <label for="username">USERNAME</label><br>
                <input name="username" type="text" value="{{Auth::user()->username}}" readonly><br><br>
                @error('username')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="phone">PHONE NUMBER</label><br>
                <input name="phone" type="text" value="{{Auth::user()->phone}}" readonly><br><br>
                @error('phone')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="email">EMAIL ADDRESS</label><br>
                <input name="email" type="text" value="{{Auth::user()->email}}" readonly><br><br>
                @error('email')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="date">DATE</label><br>
                <input name="date" type="date" required><br><br>
                @error('date')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="time">START TIME</label><br>
                <input name="time" type="time" required step="3600"><br><br>
                @error('time')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="endTime">END TIME</label><br>
                <input name="endTime" type="time" required step="3600"><br><br>
                @error('endTime')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="price">PRICE (RM)</label><br>
                <input name="price" type="text" value="10" readonly><br><br>
                @error('price')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="courts">AVAILABLE COURTS</label><br>

                <select class="button-submit" name="courtNo" id="cars" required>
                @foreach($futsal_court as $data)
                    <option name="courtNo" value="{{$data->courtNo}}">{{$data->courtNo}}</option>
                @endforeach
                </select>
                @error('courtNo')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror
                <br><br>

                <input class="button-submit" type="submit" value="SUBMIT">
            </form>
        </div>
    </div>
</body>

</html>