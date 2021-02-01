<?php

function validarTelefono($telefono){
    $reg = " /^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/ ";
    if(preg_match($reg, $telefono)){
       return "Ingresa un numero de telefono valido";
        
    }
  }

  function ValidarNombre($nombre){
    if($nombre =="" || strlen($nombre) < 2){
		return "El campo Nombre no puede estar vacio";
	}
}

function ValidarEmail($email){
    if($email="" || strpos($email,"@") === false){
		return "Ingresa un correo electronico valido";
    }
}

  function Sanitizar($mensajex){
    foreach($mensajex as $x => $x_value) {
        $newstr[$x] = 
        htmlspecialchars
        (stripslashes
        (strtolower
        (trim
        (filter_var
        ($mensajex[$x], FILTER_SANITIZE_STRING)))));
        
       /* Mostrar valores
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";*/

    }
    $newstr['nombre']=ucwords($newstr['nombre']);
    $newstr['apellido']=ucwords($newstr['apellido']);

    return $newstr;
}
function ValidarMensaje($mensaje){
    if($mensaje =="" || strlen($mensaje) < 20){
		return "El campo mensaje no puede estar vacio y debe contener mas de 20 caracteres";
	}
}
function Validar($nombre,$email,$mensaje,$telefono){

    $campos=array();
    array_push($campos,ValidarNombre($nombre));
    array_push($campos,ValidarEmail($email));
    array_push($campos,ValidarTelefono($telefono));
	  array_push($campos,ValidarMensaje($mensaje));
        if($campos[0] || $campos[1] || $campos[2] !== null || $campos[3] !== null ){
		echo "<div class='error'>";
		for($i =0;$i<count($campos);$i++){
            echo "<li>".$campos[$i]."</div>";
            return false;
		}
	}else{
        //echo "<div class='correcto'> datos correctos<br>";
        return true;
          
	}
}

function Enviar($nombre,$apellido,$referencia,$telefono,$email,$mensaje){
    include('connect.php');
    /*
    $asunto=$nombre . ' envio una consulta a traves de la web';
    $remitente='From: $nombre <$email>';
    $destino='';
    */
    $fecha=date ('y-m-d H:i:s');

     mysqli_query($conexion,"INSERT INTO contacto (nombre,apellido,referencia,email,telefono,mensaje,fecha) VALUES ('$nombre','$apellido','$referencia','$email','$telefono','$mensaje','$fecha')");
    header('');
      /*
      $contenido ="Nombre: " . $nombre ."\r\n";
			$contenido.="email: " . $email . "\r\n";
			$contenido.="Mensaje: " . $mensaje;

			$remitente_usuario="From:sitio web <$email>";
			$asunto_remitente='Aviso de recibo de consulta';
			$contenido_usuario = $nombre . ' enviaste el sig msg '.$mensaje . "\r\n";
			$contenido_usuario.= 'A la brevedad nos comuni...';

			//mail($destino,$asunto,$contenido,$remitente);
			//mail($mail, $asunto_remitente, $contenido_usuario, $remitente_usuario);*/
    }
