<?php
class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('/var/www/html/ffi/login.db');
        }
    }
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    }
?>