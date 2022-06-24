<html>
  <head>
     <title> Select operaciones </title>
 </head>
   <body>
       <form method = "post" action = "selectOperaciones2.php">
       <h6> Ingrese Primer Valor: </h6>
       <input type = "text" name = "valor1">
     <br>
       <h6> Ingrese Segundo Valor: </h6>
       <input type = "text" name = "valor2">
     <br>
       <select name = "operacion">
         <option value = "suma"> Sumar </option>
         <option value = "restar"> Restar </option>

      </select>
   <br>
      <input type = "submit" name = "operar">
    </form>
   </body>
</html>