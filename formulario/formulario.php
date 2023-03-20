<?php
    if (isset($_POST['envio']))
    {
        require_once("formulario2.php");
    }
    else
    {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Formulario De Registro</title>
</head>
<body>

    <section class="formulario">

        <h2>Formulario de Registro</h2>

        <form action="formulario_2.php" name="formul" method="post">
            <input type="text" class="controles" name="ident" 
            placeholder="Digite el numero de documento">
            <input type="text" class="controles" name="nombres"
            placeholder="Digite su nombre">
            <input type="text" class="controles" name="direccion"
            placeholder="Digite su direccion">
            <input type="text" class="controles" name="telefono"
            placeholder="Digite su numero de telefono">
            <input type="text" class="controles" name="correo"
            placeholder="Digite su correo electronico">

            <input type="submit" class="botones" name="envio" value="Envio">

        </form>

    </section>
    
</body>
</html>

<?php
}
?>