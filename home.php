<html>
<title>home</title>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="7.css" />
    <?php
    session_start();
    
if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    
    die();
}
    
function setMovieSelected($mov){
    $_SESSION['movsel']=$mov;
}

    function getName(){
        $id=$_SESSION['user_id'];
        include 'connection.php';
    
        $sql = "SELECT name FROM login WHERE      username='".$id."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0 ) { 
            echo $id;
            }
        else{
            while($row = $result->fetch_assoc()) {
               $name=$row["name"];
                             }
            $_SESSION['idname']=$name;
                             echo $name;
            }
    
    }
?>

</head>

<body style="background-image:url(6.jpg)">
    <div class="topnav">

        <a class="active" href="home.php">Home</a>
        <div class="dropdown">
            <a class="dropbtn" href="">
                <?php getName(); ?>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="fp22.php?idx=<?php echo $idh; ?>">change password</a>
                <a href="profile.php">edit profile</a>
            </div>
        </div>
        <a href="bookings.php">Bookings</a>
        <div><a href="logout.php" target="_self">Logout</a></div>
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,hi,kn,ml,mr,ne,ta,te',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
            }

        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </div>
    <br>
    <!--<div id="movie_lang_selection" style="height:10px;">
        <b>
            <font face="impact" color="white">Movies</font>
        </b> <input type="checkbox" name="all">
        <font face="calibri" color="white">All</font> <input type="checkbox" name="en">
        <font face="calibri" color="white">English</font> <input type="checkbox" name="hi">
        <font face="calibri" color="white">Hindi</font>

    </div> -->
    <div class="card">
        <div style="background-image: url(movieIMG/puzzle-et00074430-20-04-2018-04-22-01.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book%20movie.php?movie=puzzle" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt6933454/?ref_=nv_sr_1" class="bk_inf">
                        About
                    </a></div>
            </div>
        </div>


        <div class="container">
            <h4><b>Puzzle | english</b>
                <input</h4> </div> </div> <div class="card">
                    <div style="background-image: url(movieIMG/a-kid-like-jake-et00057246-15-05-2017-03-21-35.jpg)" ; class="image">
                        <div class="overlay">
                            <div class="btn1">
                                <a href="book%20movie.php?movie=a%20kid%20like%20jake" class="bk_inf">
                                    Book

                                </a>
                            </div>
                            <div class="btn2"><a href="https://www.imdb.com/title/tt6884200/" class="bk_inf">
                                    About
                                </a></div>
                        </div>
                    </div>

                    <div class="container">

                        <h4><b>A kid like jake | english</b></h4>
                    </div>
        </div>


        <div class="card">
            <div style="background-image: url(movieIMG/aquaman-et00052996-02-02-2017-10-15-37.jpg) ;" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=aquaman" class="bk_inf">
                            Book

                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt1477834/?ref_=fn_al_tt_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>

            <div class="container">
                <h4><b>Aquaman | english</b></h4>
            </div>
        </div>


        <div class="card">
            <div style="background-image: url(movieIMG/ekkees-tareeekh-et00085716-05-10-2018-04-51-12.jpg) ;" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=ekkees%20tareekh" class="bk_inf">
                            Book

                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt7769346/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>

            <div class="container">
                <h4><b>ekkees tareekh | hindi</b></h4>
            </div>
        </div>


        <div class="card">
            <div style="background-image: url(movieIMG/fantastic-beasts-the-crimes-of-grindelwald-et00065499-20-11-2017-06-10-21.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Fantastic%20Beasts:%20The%20Crimes%20of%20Grindelwald" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt4123430/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Fantastic Beasts: The Crimes of Grindelwald | english</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(movieIMG/ghoomketu-et00076284-23-05-2018-11-09-40.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=ghoomketu" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt3734580/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Ghoomketu | hindi</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(movieIMG/simmba-et00066720-07-12-2017-08-09-13.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=simmba" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt7212726/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Simmba | hindi</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(movieIMG/thugs-of-hindostan-et00046165-07-09-2016-02-46-50.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Thugs%20of%20Hindostan" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt5970844/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Thugs of hindostan | hindi,Tamil,Telegu</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(movieIMG/the-accidental-prime-minister-et00058175-07-06-2017-03-18-15.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=The%20Accidental%20Prime%20Minister" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt6986710/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>The Accidental prime minister | Hindi</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(movieIMG/zero-et00068462-01-01-2018-06-04-40.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Zero" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt6527426/?ref_=nv_sr_2" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Zero | Hindi</b></h4>
            </div>
        </div>
        <div class="card">
            <div style="background-image: url(movieIMG/mohalla-assi-et00015968-27-04-2018-06-23-29.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Mohalla%20Assi" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt4949324/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Mohalla Assi | Hindi</b></h4>
            </div>
        </div>

        <div class="card">
            <div style="background-image: url(movieIMG/2pointo.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=2pointo.jpg" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt5080556/?ref_=nv_sr_2" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>2.0 | Hindi</b></h4>
            </div>
        </div>

        <div class="card">
            <div style="background-image: url(movieIMG/spider-man-into-the-spider-verse-et00066988-11-12-2017-11-33-21.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Spider-Man:%20Into%20The%20Spider-Verse" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt4633694/?ref_=nv_sr_2" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Spider-Man: Into The Spider-Verse | Hindi</b></h4>
            </div>
        </div>

        <div class="card">
            <div style="background-image: url(movieIMG/kedarnath-et00059532-10-07-2017-04-48-38.jpg)" class="image">
                <div class="overlay">
                    <div class="btn1">
                        <a href="book%20movie.php?movie=Kedarnath" class="bk_inf">
                            Book
                        </a>
                    </div>
                    <div class="btn2"><a href="https://www.imdb.com/title/tt7027278/?ref_=nv_sr_1" class="bk_inf">
                            About
                        </a></div>
                </div>
            </div>
            <div class="container">
                <h4><b>Kedarnath | Hindi</b></h4>
            </div>
        </div>

</body>

</html>
