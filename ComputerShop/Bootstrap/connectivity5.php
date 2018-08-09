<?php
$mysql_database = "computershop";
$prefix = "";
$conn = mysql_connect("localhost","root","");

$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

if(!$DB)
{ 
	die('Could not connect: ' . mysql_error());
}


$id=$_POST['empid'];
$customer=$_POST['customerno'];
$price=$_POST['charges'];
$status1=$_POST['status'];

 $sql = "INSERT INTO callattemp".
      " (Emp_Id,Customer_Number,Charges,status) ".
      "VALUES ($id,$customer,$price,'$status1')";
      //echo"$sql";
   mysql_select_db('computershop');
   $retval = mysql_query( $sql, $conn );
   echo"$sql";
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   

    //hello();
   echo'<script>alert("Data Inserted Successfull")</script>';


 function hello()
        {
           //echo'<script>alert("Mobile No. '.$_POST['mob'].'" )</script>';
            
            $fields = array(
    "sender_id" => "FSTSMS",
    "message" => "Your Complaint has been Acknowledged.Be ready our Employee will visit your place today by 7:00 p.m",
    "language" => "english",
    "route" => "p",
    "numbers" => $_POST['customerno'],
    
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: aLEPH6QQni7YHo2QxL4MMk9ii8zoTZS5dbe0Q9O1FYAOHo9KEfvbYCZtJj0XRVS",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
            
            
        }




      echo '<script>window.location="index.html";</script>';
   
   mysql_close($conn);

?>