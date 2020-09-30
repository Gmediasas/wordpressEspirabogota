<?php
   session_start();
   /*
   Template Name: landing-load-file
   */

function print_json($status, $mensaje, $data) {
	header("HTTP/1.1 $status $mensaje");
	header("Content-Type: application/json; charset=UTF-8");
	echo json_encode($data);
	exit();
}   
   
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
   $target="https://middlepp.gevents.co/public/api/documentupload";
   
   if(isset($_FILES["responseFile"])){
        $file = $_FILES["responseFile"]; 
        $cfile = curl_file_create($file["tmp_name"],$file["type"],$file["name"]);
        $dataFile = array('responseFile' => $cfile);
        $data = array_merge($_POST,$dataFile);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $target);
        curl_setopt($curl, CURLOPT_USERAGENT,'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');
        curl_setopt($curl, CURLOPT_HTTPHEADER,array('User-Agent: Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15','Referer: http://someaddress.tld','Content-Type: multipart/form-data'));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        $result = curl_exec($curl);
		$info = (object) curl_getinfo($curl);
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
        
        print_json($response->response,'OK',$response);
   }
}
print_json('400','Error',array("status"=>"Fail"));   
die;