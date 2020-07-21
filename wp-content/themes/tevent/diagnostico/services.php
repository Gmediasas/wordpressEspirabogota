<?php 
$userId = $_SESSION['user']['id'];
$idProgram = 1;
//Gestión de errores
$postHeaders = array('Content-Type: application/json');

$url = 'http://localhost/middleware/public/api';
//$url = 'https://middlepp.gevents.co/public/api';

$apiUrl = $url.'/getFormCustomProgram/'.$idProgram;
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);
$custom = json_decode($json, true);
curl_close($curl);


$postToken = array('Content-Type: application/json','Authorization: Bearer '.$_SESSION['token']);
$apiUrlResponse = $url.'/consult_employee_user_program/'.$idProgram."/".$userId;
$curlResponse = curl_init($apiUrlResponse);
curl_setopt($curlResponse, CURLOPT_ENCODING, "");
curl_setopt($curlResponse, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlResponse, CURLOPT_RETURNTRANSFER, true);
$jsonResponse = curl_exec($curlResponse);
$response = json_decode($jsonResponse, true);
curl_close($curlResponse);

$apiUrlEmployee = $url.'/consult_employee_admin/'.$response['employee']['id'];
$curlEmployee = curl_init($apiUrlEmployee);
curl_setopt($curlEmployee, CURLOPT_ENCODING, "");
curl_setopt($curlEmployee, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlEmployee, CURLOPT_RETURNTRANSFER, true);
$jsonEmployee = curl_exec($curlEmployee);
$employee = json_decode($jsonEmployee, true);
curl_close($curlEmployee);

$apiUrlEmployeeDiag = $url.'/getconsultDiagnostico/'.$idProgram.'/'.$response['employee']['id'];
$curlEmployeediag = curl_init($apiUrlEmployeeDiag);
curl_setopt($curlEmployeediag, CURLOPT_ENCODING, "");
curl_setopt($curlEmployeediag, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlEmployeediag, CURLOPT_RETURNTRANSFER, true);
$diagUser = curl_exec($curlEmployeediag);
$diagnosticoUser = json_decode($diagUser, true);
curl_close($curlEmployeediag);

$apiUrlEmployeeDiagP = $url.'/consult_employee_adminpreguntas/'.$response['employee']['id'];
$curlEmployeediagP = curl_init($apiUrlEmployeeDiagP);
curl_setopt($curlEmployeediagP, CURLOPT_ENCODING, "");
curl_setopt($curlEmployeediagP, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlEmployeediagP, CURLOPT_RETURNTRANSFER, true);
$diagUserP = curl_exec($curlEmployeediagP);
$diagnosticoUserP = json_decode($diagUserP, true);
curl_close($curlEmployeediagP);

$apiUrlCuestionario = $url.'/get_edit_consult_form/7';
$curlCuestionario = curl_init($apiUrlCuestionario);
curl_setopt($curlCuestionario, CURLOPT_ENCODING, "");
curl_setopt($curlCuestionario, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlCuestionario, CURLOPT_RETURNTRANSFER, true);
$jsonCuestionario = curl_exec($curlCuestionario);
$cuestionarios = json_decode($jsonCuestionario, true);
curl_close($curlCuestionario);

$apiUrlCuestionariof3 = $url.'/get_edit_consult_form/5';
$curlCuestionariof3 = curl_init($apiUrlCuestionariof3);
curl_setopt($curlCuestionariof3, CURLOPT_ENCODING, "");
curl_setopt($curlCuestionariof3, CURLOPT_HTTPHEADER, $postToken);
curl_setopt($curlCuestionariof3, CURLOPT_RETURNTRANSFER, true);
$jsonCuestionariof3 = curl_exec($curlCuestionariof3);
$cuestionariosp3 = json_decode($jsonCuestionariof3, true);
curl_close($curlCuestionariof3);

?>