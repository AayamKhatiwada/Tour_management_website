<?php

$con = mysqli_connect("localhost","root","","tour_management_system");

if(mysqli_connect_error())
{
    echo 'cannot connect';
}
else{
    echo 'connected';
}

?>