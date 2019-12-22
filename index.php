<?php
$data_arr = array('var1'=>'value1',
                  'var2'=>'value2',
				  'var3'=>'value3');
//initialize
$ch = curl_init();

//connect remotely
curl_setopt($ch, CURLOPT_URL,"http://localhost/tutorial/curl/test_api.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data_arr));
			
// Receive server response 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close($ch);

//Status
if ($server_output == "OK") { 
   //echo "Success";
} else {  
   //echo "Fail";
}
?>