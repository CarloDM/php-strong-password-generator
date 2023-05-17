<?php
$passwordGenerated = ''
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

  <h2 >strong password generetor</h2>
  <p>choose the number of letters</p>

  <select class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>

  <p class="mt-5">your generated password is:</p>
  <p><?php echo $passwordGenerated ?></p>

  </div>
  </div>
</body>
</html>