<?php
function getConnection(){
    $connection=mysqli_connect('localhost','root','95241234','crud');
    if(!$connection){
        die('Error.....');
    }
    return $connection;
}
