<?php 
$lesname = "Concatenation";
$name      ="name";
$prenom = "prenom";
$age       =    14 ;
$namepage  ="pagehome";
$par       ="hello my name this ep is .$lesname";
$hpage = "welcome to.$lesname ";
$log = "<ul>";
$log .= "<li>php</li>";
$log .= "<li>html</li>";
$log .= "<li>css</>";
$log .= "</ul>";


?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $namepage." ".$lesname?></title>
</head>

<body>
    <h1>
        <?php echo $hpage ;?>
    </h1>
    <p>
        <?php echo $par ; ?><br>
        <?php echo $name . $prenom ; ?><br>
        <?php echo "your age:" . $age; ?>
    </p>
    <h2>the log ilove</h2>
    <?php echo $log ?>
</body>

</html>