<?php
//// Laad de Smarty bibliotheek in
//require_once 'libs/smarty/Smarty.class.php';
//// Voer instellingen uit en stel template parser in
//require 'includes/bootstrap.php' ;
//
//// Inladen van de head en header
//$templateParser->display("head.tpl");
//$templateParser->display("header.tpl");
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

<div id="wrapper">

<!--    <div id="dateBar">-->
<!--            <ul>-->
<!--                <li>Juli</li>-->
<!--                <li><a href="#">1</a></li>-->
<!--                <li><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--            </ul>-->
<!--    </div>-->

    <div id="numberHolder">
    <?php
        echo "<div id='month' class='monthFont'>".date("M")."</div>";
        for ($i=1;$i<=24;$i++){
            echo "<div class='numberBlock notYet'><p><b>$i</b></p></div>";
        }

    ?>
    </div>

    [oweoeprweorpor<br/>koweojfiwejfwoeji
</div>

<footer>
</footer>

</body>
</html>