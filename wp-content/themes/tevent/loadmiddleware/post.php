<?php
   session_start();
   /*
   Template Name: landing-load-post
   */

function print_json($status, $mensaje, $data) {
    $text = $mensaje;    
    if(empty($text)){
        $text = "None";
        switch ($status) {
            case 100: $text = 'Continue'; break;
            case 101: $text = 'Switching Protocols'; break;
            case 200: $text = 'OK'; break;
            case 201: $text = 'Created'; break;
            case 202: $text = 'Accepted'; break;
            case 203: $text = 'Non-Authoritative Information'; break;
            case 204: $text = 'No Content'; break;
            case 205: $text = 'Reset Content'; break;
            case 206: $text = 'Partial Content'; break;
            case 300: $text = 'Multiple Choices'; break;
            case 301: $text = 'Moved Permanently'; break;
            case 302: $text = 'Moved Temporarily'; break;
            case 303: $text = 'See Other'; break;
            case 304: $text = 'Not Modified'; break;
            case 305: $text = 'Use Proxy'; break;
            case 400: $text = 'Bad Request'; break;
            case 401: $text = 'Unauthorized'; break;
            case 402: $text = 'Payment Required'; break;
            case 403: $text = 'Forbidden'; break;
            case 404: $text = 'Not Found'; break;
            case 405: $text = 'Method Not Allowed'; break;
            case 406: $text = 'Not Acceptable'; break;
            case 407: $text = 'Proxy Authentication Required'; break;
            case 408: $text = 'Request Time-out'; break;
            case 409: $text = 'Conflict'; break;
            case 410: $text = 'Gone'; break;
            case 411: $text = 'Length Required'; break;
            case 412: $text = 'Precondition Failed'; break;
            case 413: $text = 'Request Entity Too Large'; break;
            case 414: $text = 'Request-URI Too Large'; break;
            case 415: $text = 'Unsupported Media Type'; break;
            case 500: $text = 'Internal Server Error'; break;
            case 501: $text = 'Not Implemented'; break;
            case 502: $text = 'Bad Gateway'; break;
            case 503: $text = 'Service Unavailable'; break;
            case 504: $text = 'Gateway Time-out'; break;
            case 505: $text = 'HTTP Version not supported'; break;
            default:
                $text = 'Http status code "' . htmlentities($code) . '"';
            break;
        }
    }
    header("HTTP/1.1 $status $text");
    header("Content-Type: application/json; charset=UTF-8");
    if(is_string($data)){
        echo $data;
    }else{
        echo json_encode($data);
    }
    exit();
}
   
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
   $target="https://middlepp.gevents.co/public/api/";
		$header =array('Content-Type: application/json');
		if(isset($_SESSION['token'])){
			$header[]='Authorization: Bearer '.$_SESSION['token'];
		}
        $data = $_POST;
        $metodo = $data["servicio_metodo"]; 
        unset($data["servicio_metodo"]);
        $target .=$metodo;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $target);
        curl_setopt($curl, CURLOPT_HTTPHEADER,$header);
        curl_setopt($curl, CURLOPT_ENCODING, "");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        $result = curl_exec($curl);
        $info = (object) curl_getinfo($curl);
        $error = curl_error($curl);
        curl_close($curl);
        
        $response = json_decode($result);
		if(is_object($response)) {
			$response->info=$info;
		}elseif(is_array($response)) {
			$response["info"]=$info;
		}
		else{
			$response["info"]=$info;
		}
		
        if (json_last_error() !== JSON_ERROR_NONE) {
            $response=$result;
        }
        print_json($info->http_code,'',$response);
}
print_json('400','',array("status"=>"Fail"));   
die;