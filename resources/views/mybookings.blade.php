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


    a.view-bookings {
        font-family: 'Space Mono', monospace;
        font-weight: lighter;
        color: #0453f1;
    }

    .button-SUBMIT{
            margin:5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: gray;
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

        .button-SUBMIT:hover{
            margin:5px;
            cursor: pointer;
            padding: 10px;
            font-family: 'Space Mono', monospace;
            background-color: gray;
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

<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="/">SPORTOPEDIA</a>
        <div class="navbar-right">
            <a href="{{route('profileUser')}}">PROFILE</a>
            <a class="underline-select" href="{{route('myBookings')}}">BOOKINGS</a>
            <a href="{{route('courts')}}">COURTS</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div>MY BOOKINGS</div>
        <table>
            @foreach($bookings as $booking)
            <tr>
                <td>
                    <div class="container1">
                        <div class="row1">
                            <a href="/click_edit/{{$booking->id}}">
                                <img src="img/pencil.png" alt="" id="image">
                            </a>
                            <br><br>
                            Booking ID: {{$booking->id}}
                            <a href="/click_delete/{{$booking->id}}">
                                <img src="img/bin.png" alt="" id="image">
                            </a>
                        </div>
                        <div class="row2">
                            {{$booking->bookingDate}}<br>
                            {{$booking->bookingTime}} - {{$booking->endTime}}
                        </div>
                        <div class="row3">
                            {{$booking->courtNo}}
                        </div>
                        <a href="/qrcode/{{$booking->id}}">
                            <button class="button-SUBMIT" type="button">GENERATE QR CODE</button>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>