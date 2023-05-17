<?php 
// $numb = 0;
if (array_key_exists('numb', $_GET)){
  $numb = $_GET['numb'];
  var_dump('numero lettere inserito');
}else{
  var_dump('nessun valore inserito per ora');
}
session_start();


include __DIR__ . "/functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container-sm text-center mt-5">
    <h1>la tua password è:</h1>
    <p><p><?php echo genPass($numb)?></p></p>

  </div>
  
</body>
</html>