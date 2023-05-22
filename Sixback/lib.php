<?php 
function connectToDB($user,$pass){
    $db = new PDO('mysql:host=localhost;dbname=u52818', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    return $db;
}
function connectDB(){
    $user = 'u52818';
    $pass = '1096859';
    $db = new PDO('mysql:host=localhost;dbname=u52818', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    return $db;
}
?>
