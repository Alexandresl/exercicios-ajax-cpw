<?php

  $qtd = $_GET['qtd'];

  $json = "";

  for ($i = 0; $i < $qtd; $i++) {
    for ($j = 5; $j > 0; $j--) {
      $json .= '{"img": "<img src=\"img/'.$j.'.jpg\" width=\"180\" />"},';
    }
   
  }
  $json = substr($json, 0, strlen($json) - 1);
  $json = "[" . $json. "]";
  echo $json

?>