<form action="" method="POST">
 <p> Ваше имя <input name="fio" /> </p>
  <p> Год <select name="year"> </p>
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  <p> Электронная почта <input e-mail ="email" /> </p>

  <input type="submit" value="ok" />
</form>
