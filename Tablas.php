<html>
 <head>
 <link rel="stylesheet" href="color.css">
 <?php
 
  $filas = 10;
  $columnas = 10;
  $texto = 0;
  ?>                                                   
 </head>                                                                 
 <body>      
 
<table border="1">
 <?php

 $clase='';
 for($f=0;$f<$filas;$f++){
  echo "<tr>";
 
  for($y=0;$y<$columnas;$y++){
 
   if($f%2==0){
    $clase='class="par"';
    }else{
$clase='class="inpar"';
   }
  echo "<td ".$clase.">".$texto."</td>";
  $texto++;
  }
   echo "</tr>";
  }
 ?>
 
 </table>
 </body>                                                                 
 </html>