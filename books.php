<?php
//Todo List:
//Pull books from database
//Apply template to pulled data
//Arrange data in a neat format
//Make boxes clickable.
//Other fun stuff, like putting things on grids. Which is fun. *sighs*
session_start; //I love this. Don't hate. It can be useful later <3
include("database-info.php");

$conn = new mysqli($SQL_Host,$SQL_Username,$SQL_Password,$SQL_Database);
//Checking for connection errors
if($conn-> connect_errno){
	die("SQL Database Connection Failed: " . $conn->connect_error);
}
//I'm eventually going to make a select statement, but I'll have to look at the SQL configuration. Yup.
?>

<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flextech Online Library</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="css/skel.css" />
    <link rel="stylesheet" href="css/browse_style.css" />
    <link rel="stylesheet" href="css/style-xlarge.css" />
</head>

<body class="landing">

    <!-- Header -->
    <header id="header">
        <h1><a href="HTTP://www.flextech-hs.org"><img src="images/flextech-logo.png" width="170px" height="70px"/></a></h1>

        <nav id="nav">
            <ul>
                <li><a href="index.html"><font color="#333">Home</font></a>
                </li>
                <li><a href="browse.html"><font color="#333">Browse</font></a>
                </li>
            </ul>
        </nav>
    </header>

    <section id="one" class="wrapper style1 special">
        <div class="container">
            <header class="major">
                <h2>Browse the Book Library</h2>
                <p>Look at all these amazing books that we slaved to get...</p>
            </header>
            
        </div>
    </section>

</body>

</html>