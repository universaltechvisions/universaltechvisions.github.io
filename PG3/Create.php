<?php
if(isset($_POST)){
//pg_connect("dbname=UTVDB");
// Create connection
//pg_connect("host", int $flags = 0): PgSql\Connection|false
// Check connection


// prepare and bind
// set parameters and execute

$email = $_POST['text-1707508345528-0'];
$pwd = $_POST['passcode'];
$phone = $_POST['text-1707508515014-0'];
$uname = $_POST['text-1707508634946-0'];
$IDen = 0;
$idnew = 0;
$inc = 1;
echo "<br>";

$conn_string = "host=localhost port=5432 dbname=UTVDB user=postgres password=password";
$conn = pg_pconnect($conn_string);


//$result = pg_query($conn, "Declare $ID as INT(255)");

//$IDen = pg_fetch_object($conn, "SELECT MAX(ID) FROM account");
//echo strval($IDen);
//$idnew = $IDen + $inc;
//echo strval($IDnew);
//$result = pg_query($conn, "set $NID = $ID+1");
//$stmt->bind_param(':ID', $NID);
//$stmt->bind_param(':email', $email);
//$stmt->bind_param(':username', $uname);
//$stmt->bind_param(':password', $pwd);
//$stmt->bind_param(':phone', $phone);

$result = pg_query_params($conn, 'INSERT INTO account(USERNAME, email, PWD, phone) VALUES($1, $2, $3, $4)', array($uname, $email, $pwd, $phone));




if(!$result)
{
	echo '<script>alert("Credentials already in use")</script>'; 
echo "<script>window.top.location.href = \"accounts.html";</script>";
die();
}
else
{
	echo '<script>alert("Account created")</script>'; 
echo "<script>window.top.location.href = \"accounts.html";</script>";
die();
} 

//$conn->close();
}
?>














