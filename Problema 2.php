<?php
// ==========================================
// DECLARACIÓN DE VARIABLES
// ==========================================
// Se definen tres números enteros
$numero1 = 6;
$numero2 = 2;
$numero3 = 3;

// ==========================================
// PROBLEMA 2:
// Operaciones con diferentes prioridades
// ==========================================

// Operación 1:
// Primero se realiza la multiplicación (prioridad alta)
// Luego se realiza la suma
// Resultado esperado: 6 + (2 * 3) = 6 + 6 = 12
$operacion1 = $numero1 + $numero2 * $numero3;

// Operación 2:
// Primero se realiza la suma dentro del paréntesis
// Luego se multiplica el resultado
// Resultado esperado: (6 + 2) * 3 = 8 * 3 = 24
$operacion2 = ($numero1 + $numero2) * $numero3;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Problema 2</title>

    <style>
        /* ==========================================
           ESTILOS GENERALES
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

        /* Estilo del resultado */
        .resultado { 
            color: #007bff; 
            font-weight: bold; 
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Problema 2: Prioridad de Operadores</h2>

    <!-- Operación sin paréntesis -->
    <p>
        <div class="titulo">Operación 1 (Prioridad de operadores)</div>
        <?php echo "$numero1 + $numero2 * $numero3 = <span class='resultado'>$operacion1</span>"; ?>
    </p>

    <!-- Operación con paréntesis -->
    <p>
        <div class="titulo">Operación 2 (Uso de paréntesis)</div>
        <?php echo "($numero1 + $numero2) * $numero3 = <span class='resultado'>$operacion2</span>"; ?>
    </p>

</div>

</body>
</html>
