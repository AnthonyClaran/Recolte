<?php

    function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('172.70.2.135','ETU002820','ujPbzwu7vhrW','db_desp3_ETU002820');
    }
    return $connect;
}
?>