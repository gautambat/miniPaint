<?php
  $data=$_POST['data'];
  $file="./file.txt";

  file_put_contents($file,$data);

?>
