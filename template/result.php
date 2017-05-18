<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $tours = $_POST['tours'];
    $message = $_POST['comments'];
    
   /* 
    $email_from = 'contact@christiancoogan.com';
    $email_subject = "New Form Submission";
    $email_body = "You have recieved a new message from the user " . $name . ".\n" . "Here is the message: \n" . $message; 

    $to = "contact@christiancoogan.com";
    $headers = "From: " . $email_from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    mail($to, $email_subject, $email_body, $headers);
    */
    
    function suffix($day){
        $day = $day % 100;
        if($day < 11 || $day > 13){
             switch($day % 10){
                case 1: return 'st';
                case 2: return 'nd';
                case 3: return 'rd';
            }
        }
        return 'th';
    }
    
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>Nifty Tours Template</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="navigation.js"></script>
</head>
<body>
    <header>
        <nav class="topnav" id="myTopnav">
                <a href="#home">Welcome</a>
                <a href="#news">News</a>
                <a href="#guides">Services</a>
                <a href="#about">About</a>
                <a href="#contact">Contact us!</a> 
                <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">&#9776;</a>
        </nav>  
        <img src="images/nifty-tours-logo.png">
        <div id="header_contact">
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Translators</button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="#">French</a>
                    <a href="#">Chinese</a>
                    <a href="#">Spanish</a>
                </div>
            </div>
            <a href="#contact">Come with us!</a>
            <p>503-555-1212</p>
        </div>
    </header>
    <main>
        <div id="main_content_left">
            <h1>Main Content 1</h1>
            <div id="about">
                <h1>Welcome to Nifty Tours!</h1>
                <p><em>For all your travel and tour needs</em></p>
                <hr>
                <p>We can help you</p>
                <ul>
                <li>plan a trip</li>
                <li>book all types of reservations</li>
                <li>locate an expert guide or translator</li>
                <li>become submersed in another culture</li>
                <li>do the unthinkable</li>
                <li>and have the time of your life!</li>
                </ul>
            </div>
        </div>
        <div id="slideshow_wrapper">
            <img src="images/best.png">
        </div>
    </main>
    <div id="secondary_content">
        <div id="content_wrapper">
            <div id="content_left">
                <h1>NIFTY TOURS</h1>
                <p>
                    12000 Southwest 49th Avenue<br>
                    Portland, Oregon 97219<br>
                    (503) 555-1212
                </p>
            </div>
            <div id="content_right">
                <h1>Thank you for your interest!</h1>
                <p>Thank you for your interest in the <?php echo $tours ?> tour <?php echo $name; ?>.</p>
                <p>The date you selected was <?php echo $month . " " . $day . suffix($day) . ", " . $year; ?>.</p>
                <p>Your message was <?php echo $message ?></p>
                <p>We will email you back at <?php echo '"' . $email . '"'; ?> as soon as we are able.</p>
            </div> 
        </div>
        <footer>
            <img src="images/facebook-logo.png">
            <img src="images/twitter-logo.png">
        </footer>
    </div>  
</body>
</html>