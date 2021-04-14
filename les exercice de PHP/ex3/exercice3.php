<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<form action="exercice3.php" method="POST">
<input type="text"  class="w-50 mt-5 " name="premier">
<input type="text" class="w-50 mt-3 " name="deuxiem" >
<button type="submit" class="btn btn-danger mt-5 w-50  " name="resultat"> click here</button>
</form>
<?php
 if(isset($_POST["premier"]) && isset($_POST["deuxiem"])){
     $premie=$_POST["premier"];
     $dexieme=$_POST["deuxiem"];
     for($i = 0; $i < $dexieme;$i++) {
        echo "$premie".$resultat = $premie * $i."<br>"; 

     }
 } 

?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js /bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>


</html>