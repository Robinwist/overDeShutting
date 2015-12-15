<?php
//// Laad de Smarty bibliotheek in
//require_once 'libs/smarty/Smarty.class.php';
//// Voer instellingen uit en stel template parser in
//require 'includes/bootstrap.php' ;
//
//// Inladen van de head en header
//$templateParser->display("head.tpl");
//$templateParser->display("header.tpl");

require_once 'includes/config.php';
require_once 'includes/database.php';
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour Top 100</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
<header>


    <div id="headerimages">
        <img src="img/headerimages.png">
    </div>


</header>

<div id="mainWrapper">

    <div id="numberHolder">
    <?php
    echo "<div id='dates'>";
        echo "<div id='month' class='monthFont'>Juli</div>";
        for ($i=2;$i<=24;$i++){
            echo "<a href='?page=".$i."'><div class='numberBlock notYet'><p><b>$i</b></p></div></a>";
        }
    echo "</div>";

    ?>
    </div>

    <div id="topText">
        <h2>Vandaag in de Radio 1 Tour Top 100</h2>
    </div>

    <?php

    $page = (empty($_GET['page'])) ? '' : $_GET['page'] || 2;

    switch ($page) {
        default:
            require 'models/select_songs_index.php';
            require 'views/display_songs.php';
            require 'views/sidebar.php';

        case '2':
            require 'models/select_songs_index.php';
            require 'views/display_songs.php';
            require 'views/sidebar.php';
            break;
//        case 'completeTour':
//            require 'models/select_songs_complete.php';
//            require 'views/completeTour.php';
//            break;
    }
    ?>




</div>

<footer>
</footer>

</body>
</html>