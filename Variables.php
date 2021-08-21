<?php 
$name      =   "osama";
$age       =       14 ;
$namepage  ="pagehome";
$par       ="hello my name is yassin i hve 19 years old and im from morooco and i live in korean";
$hpage = "welcomt";
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $namepage?></title>
    </head>
    <body>       
        <h1>
        <?php echo $hpage ;?>
        </h1>   
            <p>
            <?php echo $par ; ?><br>
               <?php echo $name ; ?><br>
               <?php echo  $age; ?>
            </p>
           
    </body>
    
</html>