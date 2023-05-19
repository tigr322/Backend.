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
 div class="form">
    <form action="index.php" method="POST">
      <input name="fio" <?php if ($errors['fio']) {print 'class="fio_error"';} ?> value="<?php print $values['fio']; ?>" />
      <input name="email" <?php if ($errors['email']) {print 'class="email_error"';} ?> value="<?php print $values['email']; ?>" />
      <input name="year" <?php if ($errors['year']) {print 'class="year_error"';} ?> value="<?php print $values['year']; ?>" />
      <input name="gender" <?php if ($errors['gender']) {print 'class="gender_error"';} ?> value="<?php print $values['gender']; ?>" />
      <input name="limbs" <?php if ($errors['limbs']) {print 'class="limbs_error"';} ?> value="<?php print $values['limbs']; ?>" />
      <input name="biography" <?php if ($errors['biography']) {print 'class="biography_error"';} ?> value="<?php print $values['biography']; ?>" />
      <input name="abilities" <?php if ($errors['abilities']) {print 'class="abilities_error"';} ?> value="<?php print $values['abilities']; ?>" />
      
      <input type="submit" value="ok" />
    </form>
    </div>
  </body>
</html>
