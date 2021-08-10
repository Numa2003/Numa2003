<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ediciones Fares</title>
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
</head>
<body>
    <header class="Cabecera">
    <h1>Ediciones Fares</h1>
    </header>
    <section class="secformulario">
<h2>C&aacute;lculo de Promedio</h2>
<form action="<?php=$_SERVER['PHP_SELF']?>" method="post" id="frmnumero" accept-charset="UTF-8">
<label for="nombre">Nombre del Alumno: <span class="required">*</span></label>
<input type="text" id="nombre" name="nombre" value="" required="required"> </br>

<label for="IP">Parcial I <span class="required">*</span></label>
<input type="text" id="IP" name="IP" value="" required="required"/> </br>

<label for="IIP">Parcial II <span class="required">*</span></label>
<input type="text" id="IIP" name="IIP" value="" required="required"/> </br> </br>

<label for="IIIP">Parcial III<span class="required">*</span></label>
<input type="text" id="IIIP" name="IIIP" value="" required="required"/> </br> </br>

<label for="IVP">Parcial IV: <span class="required">*</span></label>
<input type="text" id="IVP" name="IVP" value="" required="required"/> </br> </br>


<center><input type="submit" value="Promedio" id="submit"/></center>
</form>

<?php include("funcion3.php");?>

<?php
if($_SERVER['REQUEST_METHOD']=== "POST"){
$a=$_POST['IP'];
$b=$_POST['IIP'];
$c=$_POST['IIIP'];
$d=$_POST['IVP'];
$p=promediofares($a,$b,$c,$d);
echo "<center>$a tiene $p de promedio parcial</center>";
}
?>
    </section>
</body>
</html>