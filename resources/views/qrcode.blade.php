<!DOCTYPE html>
<html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Space+Mono&display=swap');

    body {
        margin: 0;
        background-color: #dfdfdf;
        font-family: 'Space Mono', monospace;
    }

    table {
        border: none;
        width: 50%;
        margin: auto;
    }

    td,
    tr {
        border: none;
        margin-top: 100px;
        margin-bottom: 10px;
        margin-left: 200px;
        margin-right: 10px;
        padding: 10px;
        font-family: 'Inter';
    }

    .row1 {
        font-size: 16px;
    }

    .row2 {
        font-size: 20px;
        font-weight: 900;
    }

    .row3 {
        font-size: 20px;
    }

    .container1 {
        width: 300px;
        height: 250px;
        border-radius: 10px;
        background: white;
        padding: 10px;
        line-height: 1.5;
        text-align: left;
    }

    #image {
        float: right;
        margin: 0 0 0 15px;
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

    .main-content .profile-image {
        text-align: center;
    }

    .main-content .profile-image .edit-logout {
        float: right;
        font-size: 40px;
        margin-right: 10px;
        border-style: solid;
        border-width: 1px;
    }

    img.profile-image-icon {
        height: 200px;
        width: 200px;
    }

    .main-content {
        margin: auto;
        padding: 10px;
        width: 50%;
        font-size: 60px;
        text-align: center;
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
    <div>MY QRCODE</div>
            {!! $qrcode !!}
    </div>
</body>

</html>