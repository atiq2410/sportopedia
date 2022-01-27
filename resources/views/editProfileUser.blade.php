<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="../css/style.css">

    <style>
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
            padding-bottom: 30px;
            width: 50%;

        }

        .main-center .title {
            width: 100%;
            font-size: 50px;
            font-family: 'Space Mono', sans-serif;
            text-align: center;
        }

        .main-center .plan-image {
            text-align: center;
        }

        .main-center .plan-image img {
            height: 200px;
            width: 200px;
        }

        .main-center {
            padding-top: 30px;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: 900;
            flex-grow: 1;
            text-align: left;
        }

        .main-center label {
            font-style: normal;
            margin: 5px;
        }

        .main-center input {
            margin: 1px;
            width: 90%;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            border: none;
            border-radius: 3px;
        }

        .main-center .button-submit {
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

        .main-center .button-submit:hover {
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

    <title>Edit User Profile</title>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="">SPORTOPEDIA</a>
        <div class="navbar-right">
            <a class="underline-select" href="{{route('profileUser')}}">PROFILE</a>
            <a href="{{route('myBookings')}}">BOOKINGS</a>
            <a href="{{route('courts')}}">COURTS</a>
        </div>
    </div>

    <!-- Content Placement -->
    <center>
        <div class="main">

            <div class="main-center">
                <div class="title">EDIT PROFILE</div>
                <div class="plan-image"><img src="../img/user-profile-icon-free-vector-removebg-preview.png"></div>

                <form action="/update-profile/{{ Auth::user()->id }}" method="post">
                    @csrf

                    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif

                    <br>
                    <label for="username">USERNAME</label><br>
                    <input name="username" type="text" placeholder="Update Username" value="{{Auth::user()->username}}"><br><br>
                    @error('username')
                    <p class="help-block text-danger">{{$message}}</p>
                    @enderror

                    <label for="password">PASSWORD</label><br>
                    <input name="password" type="password" placeholder="Change Password"><br><br>
                    @error('password')
                    <p class="help-block text-danger">{{$message}}</p>
                    @enderror

                    <label for="password">CONFIRM PASSWORD</label><br>
                    <input name="password_confirmation" type="password" placeholder="Confirm Change Password"><br><br>
                    @error('password_confirmation')
                    <p class="help-block text-danger">{{$message}}</p>
                    @enderror

                    <label for="phone">PHONE NUMBER</label><br>
                    <input name="phone" type="text" placeholder="Update Phone Number" value="{{Auth::user()->phone}}"><br><br>
                    @error('phone')
                    <p class="help-block text-danger">{{$message}}</p>
                    @enderror

                    <label for="email">EMAIL ADDRESS</label><br>
                    <input type="email" placeholder="Update Email Address" value="{{Auth::user()->email}}" readonly><br><br>

                    <input class="button-submit" type="submit" value="UPDATE">
                    <!-- <input class="button-submit" type="submit" value="CANCEL"> -->
                </form>

            </div>
        </div>
    </center>
</body>

</html>