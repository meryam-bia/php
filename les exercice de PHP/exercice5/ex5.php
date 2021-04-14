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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<form action="index.php" method="POST">
<input type="text" class="form-control w-50 mt-5 ml-5" placeholder="insert your mail please" name="mail">

<button type="submit" name="button" class="btn btn-dark btn-lg w-50 mt-5 ml-5" >click here</button>
</form>

<?php

if (isset($_POST['mail'])){
   $mailinput=$_POST["mail"];
  $navigat;
  if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
  $navigat= 'Internet explorer';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
   $navigat= 'Internet explorer';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
  $navigat= 'Mozilla Firefox';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
  $navigat= 'Google Chrome';
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
  $navigat= "Opera Mini";
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
  $navigat= "Opera";
elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
  $navigat= "Safari";
else
  $navigat= 'Something else';
  ?>
  
<table class="table table-dark mt-3">
<thead>
<tr>
<th scope="col">your mail</th>
<th scope="col">navigateur</th>
</tr>

</thead>
<tbody>
<tr>
    <td> <?php echo $mailinput?> </td>
    <td><?php echo $navigat?></td>
    </tr>
</tbody>
</table>
<?php
} 
?>
    
</body>
</html>