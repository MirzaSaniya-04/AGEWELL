<html>
<form method="POST">
City:<input type="text" name= "r">

<input type= submit>
</form>
</html>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "xyz";


$conn = mysqli_connect($servername, $username, $password, $database);



if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$reg = $_POST['r'];

$str = "SELECT name,city FROM misstudent where city = '$reg'";

$result = mysqli_query($conn, $str);

// Find the number of records returned
$num = mysqli_num_rows($result);

// echo $num;
// echo " records found in my table<br>";
// Display the rows returned by the sql query
if($num> 0){

// We can fetch in a better way using the while loop
while($r = mysqli_fetch_assoc($result)){
// echo var_dump($row);
echo "<b>Name:</b>".$r['name']. "<br><b>City :</b> ". $r['city'];
echo "<br><hr>";

}


}
else
echo " No Record found in the table.<br>";

}
?>