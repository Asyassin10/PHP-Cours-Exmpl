<?php
interface dbconncet{
    public function getuser();
    public function getartical();
    public function showstatic();
}


class  mysql implements dbconncet {
    public function getuser(){
        echo 'SELECT * FROM user';
    }
    public function getartical(){
        echo 'SELECT * FROM artical';
    }
    public function showstatic(){
        echo 'SELECT * FROM showstatic';
    }
}

class  oracl implements dbconncet {
    public function getuser(){
        echo 'SHOW * FROM user';
    }
    public function getartical(){
        echo 'SHOW * FROM artical';
    }
    public function showstatic(){
        echo 'SHOW * FROM showstatic';
    }
}
$mysql = new mysql();
$mysql->getuser();
$mysql->getartical();
$mysql->showstatic();
print_r($mysql);

echo '</br>';

$oracl = new oracl();
$oracl->getuser();
$oracl->getartical();
$oracl->showstatic();
print_r($oracl);