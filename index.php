<?php
$passwordGenerated = '';
$numb = 0;

if (array_key_exists('numb', $_GET)){
  $numb = $_GET['numb'];
}else{
  var_dump('nessun valore inserito per ora');
}

function genPass($numb){
  $lettersMinString = 'a b c d e f g h i l m n o p q r s t u v z'; 
  $lettersMinArray = explode(' ', $lettersMinString); /* 21 lettere*/
  $lettersMiusc = 'A B C D E F G H I L M N O P Q R S T U V Z';
  $lettersMaiuscArray = explode(' ', $lettersMiusc); /* 21 lettere*/
  $simbols = '/ * - + ? ! " £ $ % & / ( ) =';
  $simbolsArray = explode(' ', $simbols); /* 15 simboli*/
  $passArray = [];

  for ($i=0; $i < $numb ; $i++) { 
    //selettore randomico
    $rnd = rand(1,4); 
    if($rnd === 1){
      array_push($passArray,$simbolsArray[rand(0, 14)]);
    }else if ($rnd === 2){
      array_push($passArray,$lettersMaiuscArray[rand(0, 20)]);
    }else if ($rnd === 3){
      array_push($passArray,$lettersMinArray[rand(0, 20)]);
    }else{
      array_push($passArray,rand(0, 9));
    }
  }
  
  return implode('',$passArray);
  // var_dump(implode('',$passArray));

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <title>strong-password-generator</title>
</head>
<body>
  <div class="main_wrapper container-sm"">
  <div class="container-sm text-center mt-5">

  <h1>strong password generetor</h1>

  <form action="index.php" method="GET">
    <select class="form-select" aria-label="Default select example" name="numb">
      <option selected>choose the number of letters</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <input class="mt-3" type="submit">
    </select>
  </form>

  <p class="mt-5">your generated password is:</p>
  <p><?php echo genPass($numb)?></p>

  </div>
  </div>
</body>
</html>