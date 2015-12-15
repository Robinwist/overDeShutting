<?php

while ($results = $result->fetch_assoc()){

    echo  '<h3>' . $results['id'] . '<a href="#">' .  utf8_encode($results['title']) . '</a>' . '</h3>';

};