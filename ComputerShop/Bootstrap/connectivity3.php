<?php
$mysql_database = "computershop";
$prefix = "";
$conn = mysql_connect("localhost","root","");

$DB=mysql_select_db($mysql_database, $conn) or die("Could not select database");

if(!$DB)
{
	die('Could not connect: ' . mysql_error());
}

/*$Name=$_POST['username'];
$Password=$_POST['password'];
$Mob=$_POST['Number'];*/

$user=$_POST['username'];
$mob_no=$_POST['mob'];
$add=$_POST['address'];
$comp=$_POST['complaint'];


 $sql = "INSERT INTO complaints".
      " (userName,Mobile_No,Address,Complaint) ".
      "VALUES ('$user',$mob_no,'$add','$comp')";
      //echo"$sql";
   mysql_select_db('computershop');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
      //hello();
        echo'<script>alert("Complaint Registered Successfullly")</script>';

            echo'<script>';

           // echo'alert("Mobile No.:'.$mob_no.'")';

            echo'</script>';


        function hello()
        {
           echo'<script>alert("Mobile No. '.$_POST['mob'].'" )</script>';

            $fields = array(
    "sender_id" => "FSTSMS",
    "message" => "Your Complaint has been Registered.Thank you.",
    "language" => "english",
    "route" => "p",
    "numbers" => $_POST['mob'],

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


    /*function sendSMS()
    {
         echo'<script>';

            echo'alert("Mobile No.:'.$mob_no.'")';

            echo'</script>';
    }*/


      echo '<script>window.location="complaint.php";</script>';
   mysql_close($conn);








?>
