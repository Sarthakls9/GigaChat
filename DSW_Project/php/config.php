<?php
$conn = mysqli_connect('localhost','root','Sar#@thak2','chat');
if(!$conn){
    echo "Database Connected" . mysqli_connect_error();
}
?>