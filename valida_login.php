<?php 

    $usuario_autenticado = false;

    $usuarios_app = array(
        array("email" => "adm@gmail.com", "senha" => "12345"),
        array("email" => "text@gmail.com", "senha" => "1234")  
    );

    foreach($usuarios_app as $user){
        if($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]){
        
            $usuario_autenticado = true;
            
        } 
    }

    if ($usuario_autenticado){
        echo "Bem vindo, patrão! Os seus servos curvam-se mediante tamanha grandeza!";
    } else {
        header('Location: index.php?login=erro');
    }

?>