<form method="GET">
<input type="text" name="searche" class="form-control" style="width: 300px"placeholder="Searche">
<input type="text" name="searche1" class="form-control" style="width: 300px"placeholder="Searche">
<input type="submit" value="searche" name="select" class="btn btn-danger">
</form>
<?php 
$username = "yassin";
$password = "KVBXY8FDKZ"; 
$database = new PDO("mysql:host=localhost;dbname=student;charset=utf8",$username,$password);




if(isset($_GET['select'])){
  $rech = $database->prepare("SELECT * FROM food WHERE price BETWEEN :value1 AND :value2 ");
//
  $rech ->bindParam("value1", $_GET['searche']);
  $rech ->bindParam("value2", $_GET['searche1']);
  $rech->execute();
  foreach($rech as $donne){
    echo '
    <br>
    <div class="card text-white bg-primary mb-3 m-3" style="max-width: 18rem;">
    <div class="card-header">'.$donne['id'].'</div>
    <div class="card-body">
      <h5 class="card-title">'.$donne['name'].'</h5>
      <p class="card-text"> '.$donne['price'].'</p>
    </div>
    </div>';
  }
  }
  else{
    $select = $database->prepare("SELECT * FROM food  ");
    $select->execute();
    foreach($select as $donne){
      echo '
      <br>
      <div class="card text-white bg-primary mb-3 m-3" style="max-width: 18rem;">
      <div class="card-header">'.$donne['id'].'</div>
      <div class="card-body">
        <h5 class="card-title">'.$donne['name'].'</h5>
        <p class="card-text"> '.$donne['price'].'</p>
      </div>
      </div>';
    }

  }
  

?> 


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
