<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="formulaire1" method="get" action="Exercice1.php">
Prénom <input type="text" name="prenom"><br>
Mme <input type="radio" name="sexe" value="Mme">  
  
Mr. <input type="radio" name="sexe" value="M"><br>
<input type="submit" name="Valider" value="Valider">
</form> -->
<?php

if (isset($_GET["prenom"]) && isset($_GET["sexe"])){
   $sexe=$_GET["sexe"];
   $prenom= $_GET["prenom"];

   if($sexe == "Mme"){
       echo "hello Mme";
   }
   else{
       echo "hello MR";
   }
   


}
?>
    
</body>
</html>