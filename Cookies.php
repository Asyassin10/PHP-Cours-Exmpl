<?php 


//chek cookies :
if(count($_COOKIE)>0)
{
    echo"enable";
} 
else{
    echo "disable";
}
//set cookies
//setcokir(name,value,expire,path,domain,secure,httponly)
//name = name cookies
//value = content of the cookies
//expire = expitaion time
setcookie("zero","test",time()+3000,"/");// 1 hour
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
//modifer cookies:
    $main = '#fff';

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $main = $_POST['color'];
    setcookie('Background', $main,time()+3600,"/");//1 hour
}
if(isset($_COOKIE['Background'])){
    $body = $_COOKIE['Background'];
}else
{
    $body = $main;
}
echo $main;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier cookies</title>
</head>
<body style="background-color: <?php  echo $body; ?>;">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="color" name="color">
        <input type="submit" value="CHOSE">
    </form>
</body>
</html>


