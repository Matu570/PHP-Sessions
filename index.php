<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>

<body>
    <h1>Sessions</h1>
    <h3>Definition:</h3>
    <p>A session is the total time devoted to an activity. In computer systems, a user session begins when a user logs in to or accesses a particular computer, network, or software service. It ends when the user logs out of the service, or shuts down the computer. A session can temporarily store information related to the activities of the user while connected. A session cookie is used in web pages for storing information in case the user leaves the web page or closes down their Internet browser. For example, this is one way a website can remember what is in your shopping cart if you leave and come back.</p>

    <p>In computer programming, session variables store temporary information, sometimes to use for retrieving and viewing data on multiple web pages. Websites requiring a username and password use session variables to help transfer data between web pages, but only while the user is logged in to the computer.</p>

    
    <?php
    // Log in:
    session_start();
    // This is a normal variable:
    $normalVar="I am a string";
    // A session is a superglobal variable:
    $_SESSION['open_session']="Hello, i am a active session "; //I must indicate the index of the session that i want create. I can use it in any page of my domain.
    echo $normalVar."<br>";
    echo $_SESSION['open_session']."<br>";

    // If i open log-out page, the session be clossing, but if i oppen index, i log in, and the $_SESSION['open_session'] will exist.
    ?>







</body>

</html>