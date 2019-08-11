</a></div>
<html>

<title>bookings</title>
<?php
    session_start();
    if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}?>

<head>
    <base target="_self" />
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="3.css" />
    <link rel="stylesheet" href="6.css" />
</head>

<body style="background-image:url(10.jpg)">

    <div class="topnav" style="margin-bottom: 10px;">

        <a class="active" href="home.php">Home</a>
        <a href="">
            <?php echo $_SESSION['idname']; ?></a>
        <a href="">Bookings</a>
        <div><a href="logout.php">LOGOUT</a></div>
    </div>

    <p style="background-color:rgba(170,0,0,0.2);text-align:center;font-size:35px;color:silver;width:1500px;font-family:pristina;">your bookings</p>
    <?php
        include 'connection.php';
    $sql = "SELECT * FROM bookings WHERE      userid='".$_SESSION['user_id']."'";
    $result = $conn->query($sql);
    $numtks = $result->num_rows;
    if($numtks==0){?>
    <div>No Bookings Yet !!</div>
    <?php} else {?>
    <div class="frame">
        <div class="card">
            <div style="background-image: url(movieIMG/puzzle-et00074430-20-04-2018-04-22-01.jpg)" class="image">
                <div class="overlay">
                    <div class="btn2"><a href="https://www.imdb.com/title/tt6933454/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>

        </div>
        <div class="tk_details">Movie : puzzle<br><br>Theatre : Carnival Cinemas<br><br>Date : 12-11-2018<br><br>Show Time : xx:yy pm<br><br>seats : 2<br><br>Paid : abc</div>
    </div>
    <?php }?>
</body>

</html>
