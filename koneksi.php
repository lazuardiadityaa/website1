<?php

$server ="localhost";
$username="root";
$password ="";
$database= "27_MYWEBSITE_12RPL2";

$konek= mysqli_connect($server,$username,$password,$database);

if(!$konek) {
 die("gagal koneksi<br>".mysqli_connect_error()."<br>" .mysqli_connect_errno());
}else{
    //echo"koneksi Berhasil";
}
?>