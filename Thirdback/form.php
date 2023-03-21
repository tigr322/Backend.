<form action="" method="POST">
  <input name="fio" />
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  <input e-mail ="email" />
  <input type="submit" value="ok" />
</form>
