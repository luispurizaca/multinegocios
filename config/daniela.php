<html>
    <head>
        <meta charset="utf8">
        <style>
            h1{
                text-align: center;
            }
            #form{
                align: center;
            }
        </style>
    </head>
    <h1>REGISTRE SUS DATOS PERSONALES </h1>
<form id="form" action="ejemplo.php" method="get">
  <p>Código: <input type="text" name="nombre" size="40"></p>
   <p>Nombre: <input type="text" name="nombre" size="40"></p>
    <p>Apellido: <input type="text" name="nombre" size="40"></p>
  <p>Año de nacimiento: <input type="number" name="nacido" min="1900"></p>
  <p>Sexo:
    <input type="radio" name="hm" value="h"> Hombre
    <input type="radio" name="hm" value="m"> Mujer
  </p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Eliminar">
  </p>
</form>
</html>