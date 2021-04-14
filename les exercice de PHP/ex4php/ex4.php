<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>
   <form action="ex4.php" method="post">
    <input type="text" name="nom" placeholder="nom" ><br><br>
    <input type="text" name="prenom" placeholder="prenom"><br><br>
    <input type="text" name="adresse" placeholder="adresse" ><br><br>
    <input type="text" name="ville" placeholder="ville"><br><br>
    <input type="text" name="code" placeholder="code-postale" ><br><br>
    <input type="submit"  name="valider">
  </form>
  <?php
 if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"])&& isset($_POST["ville"])&& isset($_POST["code"])){
     $nom=$_POST["nom"];
     $prenom=$_POST["prenom"];
     $adresse=$_POST["adresse"];
     $ville=$_POST["ville"];
     $code=$_POST["code"];
    if($nom==null ||$prenom==null ||$adresse==null||$ville==null ||$code==null ){
        echo "<script>alert('verifier les champs')</script>";
    }
 }

?>


<table class="table table-dark mt-2">

<tr>
  <th >NOM</th>
  <th>PRENPM</th>
  <th>adresse</th>
  <th>ville</th>
  <th>code</th>
</tr>
<tr>
<td><?php
if(isset($_POST['valider'])){
    echo $nom;
}
?></td>
<td><?php
if(isset($_POST["valider"])){
    echo $prenom;
}
?></td>
<td><?php
if(isset($_POST["valider"])){
    echo $adresse;
}
?></td>
<td><?php
if(isset($_POST["valider"])){
    echo $ville;
}
?></td>
<td><?php
if(isset($_POST["valider"])){
    echo $code;
}
?></td>
</tr>
</table>
</body>
</html>