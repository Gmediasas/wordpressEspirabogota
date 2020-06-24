<?php
/*require_once 'vendor/autoload.php';
$client = new Google_Client();
$client->useApplicationDefaultCredentials(); 
$client->setAuthConfig('service_account_file.json');
//$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$redirect = 'http://fenalco.gmediacompany.com/prueba2.php';
$client->setRedirectUri($redirect);
$client->addScope('https://www.googleapis.com/auth/firebase.messaging');
$client->setAccessType('offline');
$client->setApprovalPrompt('force');
*/
//echo $r = $client->createAuthUrl(); exit;
header('Location: ' . filter_var('https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=offline&client_id=104082894994330378198&redirect_uri=http%3A%2F%2Ffenalco.gmediacompany.com%2Fprueba2.php&state&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Ffirebase.messaging&approval_prompt=force', FILTER_SANITIZE_URL));
print_r($_GET);
//$client->authenticate( $request->input('code') );

//get the access token
//$tokens = $client->getAccessToken();

?>