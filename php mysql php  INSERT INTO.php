<?php 
// columncount : ch7al mn coloumn f table
// columncount : ch7al mn row m aficher wla tmas7o
//bindParam : 7imaya
$username = "yassin";
$password = "KVBXY8FDKZ"; 
$database = new PDO("mysql:host=localhost;dbname=student;charset=utf8",$username,$password);
if($database){
    echo "conecte done" . "</br>";
}
else {echo "error";}
$selct = $database ->prepare("select * from student ");
$selct->execute();


echo $selct ->columnCount();
foreach($selct as $donne){
  echo '<div class="card text-white bg-dark mb-3 float-left m-3" style="max-width: 18rem;">
  <div class="card-header">'.$donne["id"].'</div>
  <div class="card-body">
    <h5 class="card-title">'.$donne["name"].'</h5>
    <p class="card-text">'.$donne["firstname"].'</p>
    <p class="card-text">'.$donne["date"].'</p>
  </div>
</div>';
}
var_dump($donne->errorInfo);
if(isset($_POST['send'])){
     $id =  $_POST['idS'];
     $name = $_POST['nameS'];
     $firstname = $_POST['firstnameS'] ;
     $date = $_POST['dateS'] ;
    $sql= $database ->prepare("insert into student(id,name,firstname,date) values('$id','$name','$firstname','$date')");
    if($sql->execute()){
        echo '<div class="alert alert-success" role="alert">
         success !
      </div>';
    }
    else{
        echo "not done";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<body>
    <main class="container">
    <form method="POST">
        <label>id: </label>
        <input type="number" name="idS" class="form-control">
        <br>
        <label>name: </label>
        <input type="text" name="nameS"  class="form-control">
        <br>
        <label >firstname: </label>
        <input type="text" name="firstnameS"  class="form-control">
        <br>
        <label >date: </label>
        <input type="date" name="dateS"  class="form-control">
        <br>
        <input type="submit" value="send" name="send" onclick="send()"  class="btn btn-danger mt-3">
    </form>
    </main>
    
  <script src="Untitled-1.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>