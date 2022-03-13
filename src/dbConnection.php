<?php

$connection = mysqli_connect("localhost","root","","short_numbers");
if(!$connection){
    die("we are not connected ".mysqli_error($connection));
}
// else{
//     echo 'connected';
// }


?>