<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/main.css">
    <title>Tickets</title>
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:index.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST" ) {

        $sql = "SELECT * FROM `klanten1` WHERE email ='" . $_SESSION['login_user'] ."';";
        $klantIDophalen = mysqli_query($db, $sql);
        $klandID = mysqli_fetch_assoc($klantIDophalen);
        print_r($klandID);
$naam = $_POST['naam'];
$aantal = $_POST['number'];
$ticket = $_POST['ticket'];
$sql = "INSERT INTO bestellingen1 (bestellingID,klantID, aantal, soort)
VALUES ('" . rand() . "','" . $klandID["klantID"] . "','" . $aantal . "','" . $ticket . "');";
    $ticketsBestellen = mysqli_query($db, $sql);
    echo "mysqli_error($sql)" . "<br>";
$_SESSION['naam'] = $naam;
$_SESSION['number'] = $aantal;
$_SESSION['ticket'] = $ticket;
header("Location: profiel.php");

if ($db->query($sql) != true){
    die ($db->error);
}



if ($db->query($sql) === TRUE) {

header("location: tickets.php");
} else {
echo "Error: " . $sql . "<br>" . $db->error;
}
}
?>
    <form class="tickets" method="post">
        Aantal: <br>
        <input type="number" name="number" min="1" value="1" required> <br>
        <select name="ticket" required>
            <option value="Basic">Basic</option>
            <option value="Premium">Premium</option>
            <option value="Vip">Vip</option>
        </select> <br>
        <input type="submit" value="verzenden" name="verzenden"><br>
    </form>




    </form>

</body>
</html>
