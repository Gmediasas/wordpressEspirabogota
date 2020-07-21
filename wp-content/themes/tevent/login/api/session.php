<?php

//API URL
$url = 'http://localhost/middleware/public/api/login_user';
//$url = 'https://middlepp.gevents.co/public/api/login_user';

//create a new cURL resource
$ch = curl_init($url);

//setup request to send json via POST
$data = array(
    'email' => $_POST['email'],
    'tipo_registro' => 1,
    'product_id' => 3,
    'rol' =>15,
    'password' => $_POST['password'],
);
$payload = json_encode($data);

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);
$login = json_decode($result, true);

//close cURL resource
curl_close($ch);

if($login['code'] == 200){


    $_SESSION['token'] = $login['access_token'];
    $_SESSION['user'] = $login['user'];
    if($login['user']['idRol'] == 1){
            echo '<script type="text/javascript">
                window.location.href="agenda-general/";
                </script>';
    }elseif($login['user']['idRol'] == 4){
        echo '<script type="text/javascript">
                window.location.href="agenda-empresa/";
                </script>';

    }else{

        echo '<script type="text/javascript">
				window.location.href="../diagnostico/bienvenida";
				</script>';
    }

}elseif($login['code'] == 401){

        echo '<script type="text/javascript">
                alert(\'No puedes iniciar sesión con este usuario\');
				window.location.href="iniciar-sesion/";
				</script>';


}elseif($login['code'] == 400){
    echo '<script type="text/javascript">
                alert(\'Usuario o contraseña incorrectos\');
				window.location.href="iniciar-sesion/";
				</script>';

}else{

    echo '<script type="text/javascript">
                alert(\'Se presento una novedad vuelve a intentarlo mas tarde\');
				window.location.href="iniciar-sesion/";
				</script>';
}
