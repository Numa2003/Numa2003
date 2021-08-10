<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ra&iacute;z de un N&uacute;mero</title>
    <link href="estilosfares.css" rel="styleshhet" type="text/css">
</head>
<body>
    <header class="Cabecera">
        <h1>Desarrollo de funciones en PHP</h1>
    </header>
<style>
    @charset "utf-8";
.Cabecera{
    background-color: #26eD99;
    border-radius: 18px;
    text-align: center;
}

.secformulario{
    position:absolute;
    left: 50%;
    width: 350px;
    padding-top: 15px;
    border-radius: 13px;
    background-color: #9fb9f5;
    margin-left: -183px;
    text-align: right;
    border-style: solid;
}

.secformulario form #submit{
    margin-left: 9em;
}
.secformulario h2{
    text-align: center;
}
.secformulario form{
    background-color: #e9e6e6;
    padding: 8px;
}

input{
    margin: 5px;
}
</style>

<section class="secformulario">
<form action="<? =$_SERVER['PHP_SELF']?>" method="post" id="" >
<label for="n1">Primer N&uacute;mero dentro de la r&iacute;z: <span>*</span></label>
<input required type="text" id="n1" name="n1"> </br>
<label for="n2">Segundo N&uacute;mero dentro de la r&iacute;z: <span>*</span></label>
<input required type="text" id="n2" name="n2"> </br>

<input type="submit" value="Calcular">
</form>

<?php include('funcion.php');

if($_SERVER['REQUEST_METHOD']=== "POST")
{
$val1=$_POST['n1'];
$val2=$_POST['n2'];
$raizval=raiz($va1,$val2);
echo "<center>La ra&iacute;z $val2 del $valor1 da como resultado: $raizval</center>";
}
?>
</section>
</body>

</html>