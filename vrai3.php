<!doctype html>


<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>
  <?php
  $min = 1;
  $max = 300;

  echo 'Les chiffres pairs compris entre '.$min.' et '.$max.' sont:';

  for($i = $min; $i < $max ; $i=$i+2){
      echo"<p>$i</p>";
  }
  ?>
</body>
</html>
