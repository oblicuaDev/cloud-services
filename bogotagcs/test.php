<?php
include "index.php";
$bog = new bogotacloud("bogota-clean-emblem-367014-8028d5d34b0c","clean-emblem-367014");



$row = [
    'uniqid' => 444,
    'name' => 'Nestor',
    'email' => 'Nestor@goyes.com',
    "serviceid"=> 0,
    "service"=> "xxxx",
    "phone"=> "33333",
    "companyid"=> 0,
    "company"=> "companyxy",
    "datet"=>"2022-10-29T20:33:00",
    "version"=> 1,
    "price"=> 1000
];

$result = $bog->bq_insert("books_pb","bookings",$row);
echo $result;


?>