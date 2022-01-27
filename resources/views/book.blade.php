<!DOCTYPE html>
<html lang="en">
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
        font-weight: 900;
        font-style: italic;
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
    <title>Book A Court</title>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="/">SPORTOPEDIA</a>
        <div class="navbar-right">
            <a href="/profileUser">PROFILE</a>
            <a class="underline-select" href="/mybookings">BOOKINGS</a>
            <a href="/courts">COURTS</a>
        </div>
    </div>

    <!-- Content Placement -->
    <div class="main">
        <!-- Make Booking left side -->
        <div class="main-left">
            <div>BOOK A COURT</div>
            <div class="plan-image"><img src="../img/Basketball-court-plan.jpg" alt="basketball-court-plan-view"></div>
            <div class="court-detail">
                <b>BASKETBALL COURT</b><br>
                BK01
                <!-- Here later is edited through the database -->
            </div>
        </div>

        <!-- Make booking right side -->
        <div class="main-right">
            Booking ID: SD0154
            <form action="{{route('booking-store')}}" method="post">
                <br>
                <label for="name">NAME</label><br>
                <input type="text" value="{{Auth::user()->username}}" disabled class="form-control @error('name') is-invalid @enderror"><br><br>
                @error('name')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="phone-number">PHONE NUMBER</label><br>
                <input type="text" placeholder="Enter Phone Number/Grab From Database" class="form-control @error('phoneNo') is-invalid @enderror"><br><br>
                @error('phoneNo')
                <p class="help-block text-danger">{{$message}}</p>
                @enderror

                <label for="email">EMAIL ADDRESS</label><br>
                <input type="text" placeholder="Enter Your Name/Grab From Database" class="form-control @error('email') is-invalid @enderror"><br><br>

                <label for="pick-date">DATE</label><br>
                <input type="date" placeholder="Pick Date"><br><br>

                <label for="time-book">TIME</label><br>
                <input type="time" placeholder="Enter Your Name/Grab From Database"><br><br>

                <label for="pricing">PRICE</label><br>
                <input type="text" placeholder="RM18" disabled><br><br>

                <input class="button-submit" type="button" value="SUBMIT">
                <input class="button-submit" type="button" value="ADD COURT">
            </form>
        </div>
    </div>
</body>

</html>