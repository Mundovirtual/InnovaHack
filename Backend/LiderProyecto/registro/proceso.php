<?php 

     	//TODOS LOS CAMPOS SON OBLIGATORIOS
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
     	if(empty($_POST['equipo'])){
     		?>
     		<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert">
   			<strong>Rellenar el campo equipo!</strong>
   			<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close"></button>
   			</div>
     		<?php
     	}else 
     	if(empty($_POST['proyecto'])){
     		 ?>
     		 <div class="alert alert-danger alert-dismissible fade show text-center" role = "alert">
   			 <strong>Rellenar el campo Proyecto!</strong>
   			 <button type = "button" class="close" data-dismiss = "alert"></button>
   			 </div>
     		 <?php
     	}else
     	if(empty($_POST['descripcion'])){
             ?>
             <div class="alert alert-danger alert-dismissible fade show text-center" role = "alert">
   			 <strong>Rellenar el campo descripcion!</strong>
   			 <button type = "button" class="close" data-dismiss = "alert"></button>
   			 </div>
             <?php
     	}else
     	if($_POST['vertical'] == '0'){
     		?>
     		<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert">
   			 <strong>Rellenar el campo vertical!</strong>
   			 <button type = "button" class="close" data-dismiss = "alert"></button>
   			 </div>
     		<?php
     	}
     	else
     	if(isset($_POST['equipo'])  && isset($_POST['proyecto']) && isset($_POST['descripcion']) &&isset($_POST['vertical'])){
        session_start();
        $id=$_SESSION['Id'];
     		//Conexion , registro al base de datos
 
     	}
     }

    
?>