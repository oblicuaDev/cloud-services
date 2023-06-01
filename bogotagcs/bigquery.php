<?php
include "index.php";
include "includes/functions.php";
$entityBody = file_get_contents('php://input');
$body = json_decode($entityBody,true);
$headers = cloudheaders();


$bog = new bogotacloud($headers["Auth"],$headers["Project"]);
//$bog = new bogotacloud("bogota-clean-emblem-367014-8028d5d34b0c","clean-emblem-367014");

//$method = $_SERVER['REQUEST_METHOD'];
switch($_GET['function'])
{
    case "feedtable":

        $ok = $bog->bq_insert($body["dataset"],$body["table"],$body["row"]);
        
        $result = array("message"=>$ok);
        break;
}
echo json_encode($result);
//echo json_encode(array($headers,$body["row"],$result));







?>