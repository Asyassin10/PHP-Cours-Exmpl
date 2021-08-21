<?php 
$username = "yassin";
$password = "KVBXY8FDKZ"; 
$database = new PDO("mysql:host=localhost;dbname=student;charset=utf8",$username,$password);
if(isset($_POST['upload'])){
    $fileType = $_FILES["file"]["type"];
    $fileName = $_FILES["file"]["name"];
    $file = $_FILES["file"]["tmp_name"];
    
    move_uploaded_file($file,$fileName);
    $position = $fileName;
    $uploadFile = $database->prepare("INSERT INTO files(name,type,position) VALUES(:name,:type,:position)");
    $uploadFile->bindParam("name",$fileName);
    $uploadFile->bindParam("type",$fileType);
    $uploadFile->bindParam("position",$position);
    if($uploadFile->execute()){
    echo 'تم رفع ملف بنجاح';
    }else{
      echo 'فشل رفع ملف';
    }
    }
    ?>
    
    <form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" accept="image/*,video/*,audio/*" required/>
    <button type="submit" name="upload">رفع ملف</button>
    <a href="page2.php">click</a>
    </form>



 