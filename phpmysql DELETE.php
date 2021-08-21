<?php 
$username = "yassin";
$password = "KVBXY8FDKZ"; 
$database = new PDO("mysql:host=localhost;dbname=student;charset=utf8",$username,$password);
$select = $database->prepare("SELECT * FROM food ");
$select->execute();
foreach($select as $donne){

echo '<div class="card text-white bg-primary mb-3 m-3" style="max-width: 18rem;">
<div class="card-header">'.$donne['id'].'</div>
<div class="card-body">
  <h5 class="card-title">'.$donne['name'].'</h5>
  <p class="card-text"> '.$donne['price'].'</p>
  <form method="POST"><button type="submit"  name="remove" class="btn btn-warning" value="'.$donne['id'].'" >Remove</button></form>
  

</div>
</div>';
}
if(isset($_POST['remove'])){
$delet = $database->prepare("DELETE FROM food WHERE id = :id ");
$get = $_POST['remove'];
$delet->bindParam("id",$get);
if($delet->execute()){
  echo "done";
  header("Location:index.php");

}
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">








 