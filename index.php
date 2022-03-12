<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.Css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div class="solicitud">
            <label>Ingrese un numero</label><br>
            <input type="number" name="Number" class="Numero"><br><br>
            <input type="submit" value="Mostrar tabla" name="boton" class="boton"><br><br>
        </div>
    </form>

    <div class="tabla">
        <?php
            Ejecutar();
        ?>
    </div>
</body>
</html>


<?php
    function Ejecutar()
    {
        if((!empty($_POST["Number"])) && (isset($_POST["boton"])))
        {
            $Numero= $_POST["Number"];
            echo "Tabla del " .$Numero. "<br><br>";

            for($i =1; $i < 11; $i++)
            {
                echo $i. " * " .$Numero. " = " .($i * $Numero). "<br>";
            }
        }
    }

?>