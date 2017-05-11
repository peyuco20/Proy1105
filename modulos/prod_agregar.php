<?php
include '../lib/conexion.php';


$conn=new Conexion;

if($conn->conectar()){
$nom=$_POST["nombre"];
$totusd=$_POST["totalusd"];
$ano=$_POST["ano"];

$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom',$totusd, $ano)";

echo $sql;
    
    if ($miconn->connect_errno) {
             echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
             }
            
             /* Consultas de selección que devuelven un conjunto de resultados */
             $resultado = $minconn->query($sql);
                 
                 $miconn->close();
}
          ?>
