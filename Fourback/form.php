<html>
  <head>
    <style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
.error {
  border: 2px solid red;
}
      .form{
        max-width: 700px;
        text-align: center;
        margin: 0 auto;
    }
    </style>  
  </head>
  <body>

<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}

// Далее выводим форму отмечая элементы с ошибками классом error
// и задавая начальные значения элементов ранее сохраненными.
?>
 <div class="form">
    <form action="index.php" method="POST">
      <label> ФИО </label> <br>
      <input name="fio" <?php if ($errors['fio']) {print 'class="fio_error"';} ?> value="<?php print $values['fio']; ?>" /> <br>
      <label> Электроная почта </label> <br>
      <input name="email" <?php if ($errors['email']) {print 'class="email_error"';} ?> value="<?php print $values['email']; ?>" /><br>
      <label> Год рождения </label> <br>
      <input name="year" <?php if ($errors['year']) {print 'class="year_error"';} ?> value="<?php print $values['year']; ?>" /><br>
      <label> Пол </label> <br>
      <input name="gender" <?php if ($errors['gender']) {print 'class="gender_error"';} ?> value="<?php print $values['gender']; ?>" /><br>
      <label> Конечностей </label> <br>
      <input name="limbs" <?php if ($errors['limbs']) {print 'class="limbs_error"';} ?> value="<?php print $values['limbs']; ?>" /><br>
      <label> Биография </label> <br>
      <input name="biography" <?php if ($errors['biography']) {print 'class="biography_error"';} ?> value="<?php print $values['biography']; ?>" /><br>
      <label> Суперспособности </label> <br>
      <input name="abilities" <?php if ($errors['abilities']) {print 'class="abilities_error"';} ?> value="<?php print $values['abilities']; ?>" /><br>
      
      <input type="submit" value="ok" /><br>
    </form>
    </div>
  </body>
</html>
