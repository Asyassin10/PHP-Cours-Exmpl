<?php
$username = "yassin";
$password = "KVBXY8FDKZ"; 
$database = new PDO("mysql:host=localhost;dbname=student;charset=utf8",$username,$password);

$files = $database->prepare("SELECT * FROM files");
$files->execute();
foreach($files AS $file ){
    echo "<a href='" ."http://localhost/server/". $file["position"] . "' download>".$file["name"]."</a> <br>";
}
?>