<?php 
$username = "yassin";
$password = "KVBXY8FDKZ"; 
$database = new PDO("mysql:host=localhost;dbname=student;charset=utf8",$username,$password);
if(isset($_POST['upload'])){

  $Filename = $_FILES["file"]["name"];
  $Filetype = $_FILES["file"]["type"];
  $Filedata =file_get_contents( $_FILES["file"]["tmp_name"]);
$addfile = $database->prepare("insert into files1(file,name,type) values(:file,:name,:type)");
$addfile->bindParam("file",$Filedata);
$addfile->bindParam("name",$Filename);
$addfile->bindParam("type",$Filetype);
if($addfile->execute()){
 echo "done";
}else{ echo "error";}

    }
    ?>
    
    <form method="POST" enctype="multipart/form-data">
    <input type="file" name="file"  required/>
    <button type="submit" name="upload">رفع ملف</button>
    </form>



 