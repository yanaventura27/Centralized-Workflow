<?

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];
$user = "";
$password = "";
$connect = mysql_connect("localhost",$user,$password);
#mysql_select_db($tutorial) or ("Database not found");

$query = "SELECT * FROM 'users' WHERE 'user' = '$inputuser'";
$querypass = "SELECT * FROM 'users' WHERE 'password' = '$inputpass'";

$result = mysql_query($query);
$resultpass=mysql_query(querypass);




echo $result;
echo $resultpass;

mysql_close();

?>