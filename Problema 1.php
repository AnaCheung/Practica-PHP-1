<?php
// ==========================================
// DECLARACIÓN DE VARIABLES
// ==========================================
// Se definen dos números enteros para realizar las operaciones
$numero1 = 6;
$numero2 = 2;

// ==========================================
// PROBLEMA 1:
// Realizar operaciones matemáticas básicas
// ==========================================

// Suma de los dos números
$suma = $numero1 + $numero2;

// Resta de los dos números
$resta = $numero1 - $numero2;

// Multiplicación de los dos números
$multiplicacion = $numero1 * $numero2;

// División de los dos números
$division = $numero1 / $numero2;

// Módulo (residuo de la división)
$modulo = $numero1 % $numero2;

// Potencia (numero1 elevado a numero2)
$potencia = $numero1 ** $numero2;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Problema 1</title>

    <style>
        /* ==========================================
           ESTILOS GENERALES DE LA PÁGINA
        ========================================== */
        body { 
            font-family: Arial; 
            background: #f4f6f8; 
        }

        /* Tarjeta contenedora */
        .card {
            background: white;
            padding: 20px;
            width: 350px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        /* Estilo de cada operación */
        .operacion { 
            margin: 10px 0; 
        }

        /* Estilo del resultado */
        .resultado { 
            color: #007bff; 
            font-weight: bold; 
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Problema 1: Operaciones Básicas</h2>

    <!-- Mostrar resultados de cada operación -->

    <div class="operacion">
        <!-- Suma -->
        <?php echo "$numero1 + $numero2 = <span class='resultado'>$suma</span>"; ?>
    </div>

    <div class="operacion">
        <!-- Resta -->
        <?php echo "$numero1 - $numero2 = <span class='resultado'>$resta</span>"; ?>
    </div>

    <div class="operacion">
        <!-- Multiplicación -->
        <?php echo "$numero1 * $numero2 = <span class='resultado'>$multiplicacion</span>"; ?>
    </div>

    <div class="operacion">
        <!-- División -->
        <?php echo "$numero1 / $numero2 = <span class='resultado'>$division</span>"; ?>
    </div>

    <div class="operacion">
        <!-- Módulo -->
        <?php echo "$numero1 % $numero2 = <span class='resultado'>$modulo</span>"; ?>
    </div>

    <div class="operacion">
        <!-- Potencia -->
        <?php echo "$numero1 ^ $numero2 = <span class='resultado'>$potencia</span>"; ?>
    </div>

</div>

</body>
</html>