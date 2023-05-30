<?php
header('Content-Type: text/html; charset=UTF-8');
 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (!empty($_GET['save'])) {
  }
  include('form.php');
}
else{
    $regex_name="/[a-z,A-Z,а-я,А-Я,-]*$/";
    $regex_email="/[a-z]+\w*@[a-z]+\.[a-z]{2,4}$/";
    $regex_year = "/[2000-2023]$/"
    $regex_gender = "/[1,2]$/"
    $regex_limb = "/[1,10]$/"
    $regex_power = array('Проход сквозь стены','Дыхание под водой','Ночное зрение','Уметь делать сальто назад');

    $errors = FALSE;
    if (empty($_POST['name']) or !preg_match($regex_name,$_POST['name'])) {
    print('Заполните имя.<br/>');
    $errors = TRUE;
    }
    if (empty($_POST['email']) or !preg_match($regex_email,$_POST['email'])){
    print('Заполните почту.<br/>');
    $errors = TRUE;
    }
    if ($_POST['year']=='Выбрать'or !preg_match($regex_year,$_POST['year'])){
    print('Выберите год рождения.<br/>');
    $errors = TRUE;
    }
    if (empty($_POST['gender'])or !preg_match($regex_gender,$_POST['gender'])){
    print('Выберите пол.<br/>');
    $errors = TRUE;
    }
    if (empty($_POST['limb'])or !preg_match($regex_limb,$_POST['limb'])){
    print('Выберите сколько у вас конечностей.<br/>');
    $errors = TRUE;
    }
    if(!isset($_POST['power'])or !preg_match($regex_power,$_POST['power'])){
        print('Выберите хотя бы одну суперспособность.<br/>');
        $errors=TRUE;
    }
    if (empty($_POST['checkin'])){
      print('Чек.<br/>');
    $errors = TRUE;
    }
    if ($errors) {
    print_r('Исправьте ошибки');
    exit();
    }

    $user = 'u52818';
    $pass = '1096859';
    $db = new PDO('mysql:host=localhost;dbname=u52818', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

    try {
    $stmt = $db->prepare("INSERT INTO tabl SET name=?,email=?,year=?,gender=?,limb=?,bio=?");
    $stmt -> execute(array($_POST['name'],$_POST['email'],$_POST['year'],$_POST['gender'],$_POST['limb'],$_POST['bio']));
    $id=$db->lastInsertId();
    $som=$db->prepare("INSERT INTO power SET id_power=:power,id_person=:person");
    $som->bindParam(':person', $id);
    foreach($_POST['power']  as $power){
    $som->bindParam(':power', $power);
    if($som->execute()==false){
      print_r($som->errorCode());
      print_r($som->errorInfo());
      exit();
    }
  }
    }
    catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
    }
    header('Location: ?save=1');
}
?>
