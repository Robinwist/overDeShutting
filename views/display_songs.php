<?php

while ($results = $result->fetch_assoc()){

echo '<div class="articles">';
    echo  '<div id="homeArticle">';
        echo  '<img src="img/' . $results['img'] . '">';
        //    echo  '<h3>' . $results['id'] . '</h3>';
        echo  '<div class="homeArticleText">';
            echo  '<div class="top">' . '<h3>'  . '<div class="idBox">' . $results['id'] . '</div>' . '</br></br>' .  $results['artist'] . " : " . $results['songName'] . '</h3>' . '</div>';
            echo  '<p>' . $results['infoShort'] . '</p>';
            echo  '</div class="homeArticleText">';
        // echo  $results['video'];
        echo  '</div>';
    echo '</div>';



};