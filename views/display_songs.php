<?php

echo '<div id="articleWrapper">';

while ($results = $result->fetch_assoc()){


    echo '<div class="articles">';
        echo  '<div id="homeArticle">';
            echo  '<img src="img/' . $results['img'] . '">';
            //    echo  '<h3>' . $results['id'] . '</h3>';
            echo  '<div class="homeArticleText">';
                echo  '<div class="top">' . '<h3>'  . '<div class="idBox">' . $results['id'] . '</div>' . '<a href="#">' .  utf8_encode($results['title']) . '</a>' . '</h3>' . '</div>';
                echo  '<p>' . utf8_encode($results['description']) . '</p>';
                echo  '</div class="homeArticleText">';
            // echo  $results['video'];
            echo  '</div>';
        echo '</div>';



};

echo '</div>';