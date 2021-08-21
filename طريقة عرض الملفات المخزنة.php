<?php 
$username = "yassin";
$password = "KVBXY8FDKZ"; 
$database = new PDO("mysql:host=localhost;dbname=student;charset=utf8",$username,$password);
$select = $database->prepare("select * from files1 where type = 'image/jpeg'");
$select->execute();
foreach($select as $data)
{
$getdata = "data:".$data['type'].";base64,".base64_encode($data['file']);
  echo "<a href='".$getdata." dowload'>".$data['name']."</a>";
}
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



 