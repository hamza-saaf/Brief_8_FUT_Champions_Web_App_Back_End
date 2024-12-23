<?php 
$host= "localhost";
$username= "root";
$password= "";
$dbname= "fut_champions_club";

$connect_database = mysqli_connect( $host, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "Not Connected";
    exit();
}
else{
    echo "";
}

?>