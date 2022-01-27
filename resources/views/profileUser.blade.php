<!DOCTYPE html>
<html>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Space+Mono&display=swap');

        body {
            margin: 0;
            background-color: #dfdfdf;
            font-family: 'Space Mono', monospace;
        }

        table{
            margin: auto;
            border: none;
            width: 75%;
        }

        td,th{
            border: none;
            text-align:right;
            margin: auto;
        }

        th.bring-right{
            width: 75%;
            font-size: 30px;
            font-weight: normal;
        }

        th.bring-right a{
            color:#0453f1;
        }

        th.bring-center{
            width: 55%
        }

        .navbar{
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

        .navbar-right{
            float:right;
        }

        .navbar .navbar-right a:hover {
            transition: 0.3s;
            border-bottom: 3px solid whitesmoke;
            margin: 3px;
        }

        .navbar .navbar-right .underline-select{
            text-decoration: underline;
            text-decoration-color: white;
        }

        .main-content .profile-image{
            text-align: center;
        }

        .main-content .profile-image .edit-logout{
            float:right;
            font-size: 40px;
            margin-right: 10px;
            border-style: solid;
            border-width: 1px;
        }

        img.profile-image-icon{
            height: 200px;
            width: 200px;
        }

        .main-content{
            margin:auto;
        }

        .main-content .profile-frame{
            font-size: 30px;
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            padding: 5px;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
            text-align: center;
            background-color: #ffff;
            border:1px none black;
            border-radius: 5px;
            height: fit-content;
            line-height: 1.5;
        }

        input.points{
            margin-top: 10px;
            font-size: 30px;
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            background-color: black;
            color: white;
            border-radius: 5px;
        }

        a.my-bookings{
            font-family: 'Space Mono', monospace;
            font-weight: lighter;
            color: #0453f1;
        }

        .button-submit {
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

        .button-submit:hover {
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
    <title>User Profile</title>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="/">SPORTOPEDIA</a>
        <div class="navbar-right">
            <a class="underline-select" href="{{route('profileUser')}}">PROFILE</a>
            <a href="{{route('myBookings')}}">BOOKINGS</a>
            <a href="{{route('courts')}}">COURTS</a>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <!--<div class="profile-image">
            <img class="profile-image-icon" src="img/user-profile-icon-free-vector-removebg-preview.png" alt="profile-icon">
            <div class="edit-logout">
                <a href="">EDIT</a>
                <a href="">LOGOUT</a>
            </div>
        </div>-->
        <table>
            <tr>
                <th></th>
                <th class="bring-center"><img class="profile-image-icon" src="../img/user-profile-icon-free-vector-removebg-preview.png" alt="profile-icon"></th>
                <th class="bring-right">
                    <form action="{{route('editProfileUser')}}" method="get">
                        <input class="button-submit" type="submit" value="EDIT">
                    </form>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input class="button-submit" type="submit" value="LOGOUT">
                    </form>

                </th>
            </tr>
        </table>
        
        <div class="profile-frame">
            Username: {{Auth::user()->username}} <br>
            Phone Number: {{Auth::user()->phone}} <br>
            Email Address: {{Auth::user()->email}} <br>
            <form action="">
                <input class="points" type="button" disabled value="{{Auth::user()->points}} POINTS">
            </form><br>
            <a class="my-bookings" href="/mybookings">MY BOOKINGS</a>
        </div>
    </div>
</body>

</html>