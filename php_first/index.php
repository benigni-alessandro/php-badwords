<?php
  $testo = $_GET['badword'] . ' ' .'è una brutta parola';ù
?>

<div class="">
  <?php
  echo  str_replace($_GET['badword'], '***', $testo) . '<br>';
  echo 'la stringa è lunga' . ' ' . strlen($testo) . ' caratteri';
  ?>
</div>
