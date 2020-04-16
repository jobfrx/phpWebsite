<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiel</title>
</head>
<body>
<h1>Profiel</h1>

<?php

session_start();

if(!isset($_SESSION['login_user']))
{
    header("location:index.php");
}

$sql = "SELECT * FROM klanten1 ";
$sql .= "WHERE email ='" . $_SESSION['login_user'] . "';";
$klantenOphalen = mysqli_query($db, $sql);
$klant = mysqli_fetch_assoc($klantenOphalen);
echo "<table border='2px'><tr>";
foreach ($klant as $key => $value){
    echo "<td>" . $key . "</td>";


}
echo "</tr><tr>";
foreach ($klant as $key => $value){
    echo "<td>" . $value . "</td>";

}
?>
</tr>
</table>

<h1>Bestellingen</h1>
<?php
$sql = "SELECT * FROM `klanten1` WHERE email ='" . $_SESSION['login_user'] ."';";
$klantIDophalen = mysqli_query($db, $sql);
$klantID = mysqli_fetch_assoc($klantIDophalen);
$sql = "SELECT * FROM bestellingen1 WHERE klantID=" . $klantID['klantID'] . ";";
$bestellingOphalen = mysqli_query($db, $sql);

while ($bestelling = mysqli_fetch_assoc($bestellingOphalen))
    {
        echo "<table border='2px'>";
        echo "<tr>";
        foreach ($bestelling as $key => $value){
            echo "<td>" . $key . "</td>";


        }
        echo "</tr><tr>";
        foreach ($bestelling as $key => $value){
            echo "<td>" . $value . "</td>";

        }
        echo "</tr>";
        echo "</table>";
    }
?>




</body>
</html>
