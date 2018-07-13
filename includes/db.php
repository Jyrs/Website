<?php

$connection = mysqli_connect('127.0.0.1','root',
                              '','blog');
if($connection == false)
{
  echo "connection error";
  echo mysqli_connect_error();
  exit();
}
?>
