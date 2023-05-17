<?php
$numb = 0;
if (array_key_exists('numb', $_GET)){
  $numb = $_GET['numb'];
  var_dump('numero lettere inserito');
}else{
  var_dump('nessun valore inserito per ora');
}
include __DIR__ . "/functions/functions.php";

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

  <form action="passGenerated.php" method="GET">
    <select class="form-select" aria-label="Default select example" name="numb">
      <option selected>choose the number of letters</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <input class="mt-3" type="submit">
    </select>
  </form>

  <p class="mt-5">your generated password is:</p>
  <p><?php echo genPass($numb)?></p>

  </div>
  </div>
</body>
</html>