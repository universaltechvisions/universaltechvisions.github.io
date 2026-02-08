<style>
<?php include 'gaster.css'; ?>
</style>

<?php

require 'vendor/autoload.php';

use PostgreSQLTutorial\Connection as Connection;
if(isset($_POST)){

echo "<h1>TEST</h1>";
echo "This is the UTV PHP testing utility";
echo "<br>";
echo "This is for the server side of the website.";
echo "<br>";
echo "If you are not Brett, Evan, Ben, or Neiko, you probably shouldnt be here.";
echo "<br>";
echo "In fact, you REALLY shouldnt be here.";
echo "<br>";
echo "Go home. Get lost. The adults are talking.";
echo "<br>";
try {
    Connection::get()->connect();
    echo 'PHP is online.';
} catch (\PDOException $e) {
    echo $e->getMessage();
}
echo "<br>";
$conn_string = "host=localhost port=5432 dbname=UTVDB user=postgres password=password";
$conn = pg_pconnect($conn_string);
if (!$conn) {
  echo "PGadmin v4: Offline.\n";
  exit;
}

$result = pg_query($conn, "SELECT  FROM DEV");
if (!$result) {
  echo "FATAL: A PGadmin v4 error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "PGadmin v4: $row[0]";
  echo "<br />\n";
}

$conn = null;
echo "</table>";
echo "$phpconn";
echo "<br>";
phpinfo();
echo "<br>";
}

?>
