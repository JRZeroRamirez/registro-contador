<title>Prueba JR Jeisson Ramirez Bravo</title>

<link rel="stylesheet" href="css/estilo.css">

<script src="js/ajax.js"></script>

<!--conexion bd-->
<?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "login";
         $mysqli= new mysqli($servername,$username,$password,$database); 
 
?>
 

<div class="wrapper">
  <div class="one"><figure class="img1"><a href="#"><img src="imagenes/1.jpg" alt="" /></a></figure></div>
  <div class="two"><figure class="img2"><a href="#"><img src="imagenes/2.jpg" alt="" /></a></figure></div>
  <div class="three"><figure class="img1"><a href="#"><img src="imagenes/3.jpg" alt="" /></a></figure></div>
  <div class="four">
    <form action=""  method="post">
        <table class="usuario">   
        <tr>    
        <td><br><input type="text" name="nombre" placeholder="Ingrese su Nombre" required></td>
        </tr>
        </tr>
        <td><br><input type="number" min="0" name="edad" placeholder="Digite su edad" required></td>
        </tr>
        <tr>
        <td><br><button onclick="Registrar();" name="agregar" type="submit">ENVIAR</button><br><br></td>
        </tr>  
        </table>
    </form>
        <div class="datagrid" id="datagrid">
        </div>
  </div>
  <div class="five"> 
    <?php
    // consultar registros
    
    if($consulta =$mysqli->query("SELECT * FROM datos")){

    $row_cnt=$consulta->num_rows;
    echo 'Usuarios:';echo "<br>".$row_cnt.'';   
    }
    ?>
  </div>
</div>

 <?php
 
 /// Agregar registro
 if(isset($_POST['agregar'])){
    $idEditar=$_POST['id'];
    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];    

    $mysqli->query("INSERT INTO datos (nombre,edad)VALUES('$nombre','$edad') ");
    echo '<script language="javascript">alert("Registro Ingresado");
    window.location.href="index.php"</script>';
}
/// END

 
 ?>

