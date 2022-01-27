<!DOCTYPE html>
<html lang="en">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Space+Mono&display=swap');

        body {
            margin: 0;
            background-color: #dfdfdf;
            font-family: 'Space Mono', monospace;
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

        .main{
            display: flex;
            margin-top: 30px;
            width: 100%;
        }

        .main-content {
        margin: auto;
        padding: 10px;
        width: 50%;
        font-size: 60px;
        text-align: center;
    }

        .main-left{
            padding: 10px;
            width: 50%;
            font-size: 60px;
            text-align: center;
        }

        .main-left .plan-image{
            text-align: center;
        }

        .main-left .plan-image img{
            height: 490px;
            width: 318px;
        }

        .main-left .court-detail{
            font-family: 'Inter', sans-serif;
            font-size: 30px;
            font-weight: bold;
        }

        .main-right{
            padding-top: 30px;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: 900;
            font-style: italic;
            flex-grow: 1;
            text-align: left;
        }

        .main-right label{
            font-style: normal;
            margin: 5px;
        }

        .main-right input{
            margin:1px;
            width:90%;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            border: none;
            border-radius: 3px;
        }

        .main-right .button-submit{
            margin:5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: black;
            color: white;
            width:fit-content;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: bold;
            border: none;
            border-radius: 3px;
            text-align: center;
            transition: 0.3s;
        }

        .main-right .button-submit:hover{
            margin:5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: black;
            color: white;
            width:fit-content;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: bold;
            border: none;
            border-radius: 3px;
            text-align: center;
            opacity: 0.5;
        }

        .main-right .button-DELETE{
            margin:5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: red;
            color: white;
            width:fit-content;
            font-family: 'Inter', sans-serif;
            font-size: 25px;
            font-weight: bold;
            border: none;
            border-radius: 3px;
            text-align: center;
            transition: 0.3s;
        }

        .main-right .button-DELETE:hover{
            margin:5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: red;
            color: white;
            width:fit-content;
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
    <title>Edit Booking</title>
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
        <div class="main-content">
        <div>EDIT YOUR BOOKING</div>
    </div>

        <!-- Make booking right side -->
        <div class="main-right">
        <form action="/update/{{$bookings[0]->id}}" method="POST">
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
                <input name="bookingDate" type="date" required value = "{{$bookings[0]->bookingDate}}"><br><br>
                @error('date')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="time">START TIME</label><br>
                <input name="bookingTime" type="time" required step="3600" value = "{{$bookings[0]->bookingTime}}"><br><br>
                @error('time')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="endTime">END TIME</label><br>
                <input name="endTime" type="time" required step="3600" value = "{{$bookings[0]->endTime}}"><br><br>
                @error('endTime')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="price">PRICE (RM)</label><br>
                <input name="price" type="text" value="{{$bookings[0]->price}}" readonly><br><br>
                @error('price')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="courts">COURTS</label><br>
                <input name="courtNo" type="text" value="{{$bookings[0]->courtNo}}" readonly><br><br>
                @error('courtNo')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror
                <br>

                <input class="button-submit" type="submit" value="EDIT">
            </form>
            <a href="/mybookings">
                <button class="button-DELETE" type="button">CANCEL</button>
            </a>
        </div>
    </div>
</body>
</html>