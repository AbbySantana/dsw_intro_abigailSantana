<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilos.css'>
    <script src='main.js'></script>
</head>

<body>
    
<form action="horario.php" method="POST">
  <label for="horario">Elija una opcion:</label>
  <select name="horario" id="horario">
    <optgroup label="Grupo">
      <option value="horarioDAW">DAW</option>
      <option value="horarioDAM">DAM</option>
    </optgroup>
    <optgroup label="Docente">
      <option value="horarioSergio">Sergio</option>
     
    </optgroup>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
 

</body>

</html>