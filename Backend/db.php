<?php
    $connection = mysqli_connect('localhost', 'root', 'Mdvlinux23', 'test');
   echo (!$connection) ? "Connection Failed" : "";
?>