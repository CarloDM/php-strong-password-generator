<?php 

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