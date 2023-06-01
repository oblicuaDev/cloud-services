<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    require 'vendor/autoload.php';
    use Google\Cloud\BigQuery\BigQueryClient; 
    
        class bogotacloud {
        // Properties
        public $bigQuery;
        public $oauth;
        function __construct($authfile,$projectId)
        {
            $this->oauth = json_decode(file_get_contents($authfile.'.json'),true);
            $this->bigQuery = new BigQueryClient(['keyFile'=>$this->oauth,'projectId' => $projectId,]);
        }
        function bq_insert($dataset,$table,$row,$insertId="900")
        {
            //$table = $this->bigQuery->dataset('books_pb')->table('bookings');
            $table = $this->bigQuery->dataset($dataset)->table($table);
           /* $insertResponse = $table->insertRow($row, [
                'insertId' => $insertId
            ]);*/
            $insertResponse = $table->insertRow($row, []);
            if($insertResponse->isSuccessful())
            {
                return true;
            }else
            {
                return false;
            }
        }
}
?>