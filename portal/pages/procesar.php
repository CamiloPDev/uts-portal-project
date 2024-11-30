<?php
include ('bdConexion.php');

$miconexion = new ConexionMYSQL();

$miconexion->CrearConexion();

$id=$_POST['id'];

$nombre=$_POST['nombre'];

//////////////
///INSERTAR///
/////////////

if($_POST['btnRegistrar']){

$sql = "insert into `usuario` (`id`, `nombre`) values ('".$id."','".$nombre."')";
$result = $miconexion->EjecutarSQL($sql); 

if($result){

    $numfila = $miconexion->ObtenerColumnasAfectadas();
    if($numfila>0){
        echo "<br>Registro ejecutado exitosamente. <br>";
    }
    }else{
        echo "<h2>Error Ejecutando registrosz</h2>";
    }

}

////////////////
///CONSULTAR////
///////////////


if($_POST['btnConsultar']){

    $sql = "select * from usuario where id=".$id;
    $result = $miconexion->EjecutarSQL($sql);  
    if($result){
        while($row= $miconexion->ObtenerFilas($result)){ 
            header("Location: ../index.php?id=". $row[0] . "&nombre=" . $row[1]);
            //echo "El nombre es: ".$row[1];
        }
        }else{
            echo "<h2>Error usuario no existe</h2>";
        }
    
    }
    

///////////////
///ELIMINAR////
//////////////

if($_POST['btnEliminar']){

    $sql = "delete  from usuario where id=".$id;
    $result = $miconexion->EjecutarSQL($sql);  
    if($result){
        $numfilas = $miconexion->ObtenerColumnasAfectadas();
        if($numfila>0){
            echo "<br> Se elimino exitosamente. <br>";
            }
        }else{
            echo "<h2>Error al Eliminarel usuario</h2>";
        }
    }

    
////////////////
///ACTUALIZAR///
///////////////

if($_POST['btnActualizar']){
    $sql = "update usuario set nombre='".$nombre."' where id=".$id;
    $result = $miconexion->EjecutarSQL($sql);  
    if($result){
        if($result>0){
            echo "<br> Se ha ACTUALIZADO exitosamente. <br>";
            }
        }else{
            echo "<h2>Error no se ha ACTUALIZADO el usuario</h2>";
        }
    }









?>