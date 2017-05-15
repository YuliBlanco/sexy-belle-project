<?php
 $nombre= $_POST['nombre'];
 $apellido= $_POST['apellido'];
 $email= $_POST['email'];
 $brasier = (isset($_POST['prenda1']))?1:0;
 $panty  =  (isset($_POST['prenda2']))?1:0;
 $brasier_panty = (isset($_POST['prenda3']))?1:0;
 $scrunchy = (isset($_POST['prenda4']))?1:0;
 
 include("conexion.php");
         

  $sql = "SELECT count(*) as cuenta from suscripciones where (email='$email')";
   

  $query = mysqli_query($conexion,$sql);

  $registro = mysqli_fetch_object($query);

  if ($registro->cuenta == 0){
   echo "Tu correo es valido";
    $consulta = "INSERT INTO suscripciones (nombre,apellido,email,prenda1,prenda2,prenda3,prenda4) VALUES ('$nombre','$apellido','$email',$brasier,$panty,$brasier_panty,$scrunchy)";

         mysqli_query($conexion,$consulta);
		 mysqli_close ($conexion);
		 echo 'Tú también eres Sexy&belle exitosamente';

  }
  else{
   echo 'El correo ya esta registrado, por favor ingresa otro'; 
  }


//'".$prenda1."''".$prenda2."''".$prenda3."'
?>

 




        
