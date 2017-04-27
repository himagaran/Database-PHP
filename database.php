<?php


$connect=mysqli_connect('localhost','root','','soundspace');

if(mysqli_connect_errno($connect))
{
    echo 'Failed to connect';
}

?>