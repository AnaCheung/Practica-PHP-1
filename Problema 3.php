<?php
// ==========================================
// DECLARACIÓN DE VARIABLE
// ==========================================
// Se guarda el mensaje de saludo en una variable
$mensaje = "HELLO WORLD!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Problema 3</title>

    <style>
        /* ==========================================
           ESTILOS GENERALES DE LA PÁGINA
        ========================================== */
        body {
            font-family: Arial;
            background: #f4f6f8;

            /* Centrar el contenido en la pantalla */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Tarjeta contenedora */
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        /* Estilo del mensaje */
        .resultado {
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="card">

    <!-- ==========================================
         PROBLEMA 3:
         Mostrar un mensaje de saludo
    ========================================== -->
    
     <h2>Problema 3: Mostrar un mensaje de saludo</h2>

    <div class="resultado">
        <!-- Se imprime el contenido de la variable -->
        <?php echo $mensaje; ?>
    </div>

</div>

</body>
</html>
