<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php

$hostname = "localhost";
$username = "db_user";
$password = "Passw0rd";
$db = "family";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>

<table border="1" align="center">
<tr>
  <td>Member Name</td>
  <td>Date Of Birth</td>
  <td>Details</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM family_members")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['member_name']}</td>
    <td>{$row['dob']}</td>
    <td>{$row['details']}</td>
   </tr>\n";

}

?>
</table>
</body>
</html>