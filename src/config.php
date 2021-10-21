
<?php
  define('HOST','localhost');
  define('USER','root');
  const PASS  = '';
  const DB    = 'qlbv'; 
  $Con = mysqli_connect(HOST,USER, PASS,DB);
  if(!$Con){
      die('Không thể kết nối');
  }
?>