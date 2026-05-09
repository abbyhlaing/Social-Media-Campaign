<?php
$conn=new mysqli("localhost","root","","social_media_campaings");
if($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
}
// else{
//     echo "Connection Successful";
// }

?>