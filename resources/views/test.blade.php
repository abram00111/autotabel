<?php
foreach ($orgs as $org) {
    echo $org->long_name .' ';
    $org->division->map(function ($post) {
        echo $post->name.' ';
        //Ну и остальные поля новости. Какие они там у вас.
    });
    echo'<br>';
}
