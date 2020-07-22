<?php

$container->set('db_settings', function(){
    return (object)[
        "DB_NAME" => "bdappbars",
        "DB_PASS" => "",
        "DB_CHAR" => "utf8",
        "DB_HOST" => "localhost",
        "DB_USER" => "root",
    ];
});

?>