<?php

    $klantID = $_GET['GetID'];
    $query = "SELECT * FROM klanten1 WHERE klantID = '".$klantID."'";
    $result = mysqli_query($db, $query);

//    while()
        $row = mysqli_fetch_assoc($result);
        $bier = "Bier";
        $KlantID = $row['klantID'];
        $Fname = $row['naam'];
        $Lname = $row['achternaam'];
        $Email = $row['email'];
        $Phone = $row['telefoonnummer'];
        $Adres = $row['adresgegevens'];
        $Password = $row['wachtwoord'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<form method="post" action="update.php?ID=<?php echo $KlantID; ?>">
  <div class="container">
    <h1>Gegevens bewerken</h1>
    <p>Vul A.U.B alle informatie in om vervolgens de gegevens te bewerken.</p>
    <hr>

    <label for="voornaam"><b>Voornaam</b></label>
    <input type="text" placeholder="Voornaam..." name="voornaam" value="<?php echo $Fname; ?>" required>

    <label for="achternaam"><b>Achternaam</b></label>
    <input type="text" placeholder="Achternaam..." name="achternaam" value="<?php echo $Lname; ?>" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email..." name="email" value="<?php echo $Email; ?>" required>

    <label for="telefoonnummer"><b>Telefoonnummer</b></label>
    <input type="text" placeholder="Telefoonnummer..." name="telefoonnummer" value="<?php echo $Phone; ?>" required>

    <label for="adres"><b>Adres</b></label>
    <input type="text" placeholder="Adres..." name="adres" value="<?php echo $Adres; ?>" required>

    <label for="wachtwoord"><b>Wachtwoord</b></label>
    <input type="password" placeholder="Wachtwoord..." name="wachtwoord" value="<?php echo $Password; ?>" required>


    <input type="submit"  name="update" class="registerbtn">
  </div>


    <?php


        if (isset($_POST['update']))
        {
            $id = $_POST['id'];
            $voornaam = $_POST['voornaam'];
            $achternaam = $_POST['achternaam'];
            $email = $_POST['email'];
            $telefoonnummer = $_POST['telefoonnummer'];
            $voornaam = $_POST['voornaam'];
            $wachtwoord = $_POST['wachtwoord'];



            $query = "UPDATE 'klanten1' SET voornaam='$voornaam', achternaam='$achternaam', email='$email', telefoonnummer='$telefoonnummer', wachtwoord='$wachtwoord' where id='$id' ";
            $query_run = mysqli_query($db, $query);

            if ($query_run)
            {
                echo '<script type="text/javascript"> alert("Data updated")</script>';
            }
            else
            {
                echo '<script type="text/javascript"> alert("Data not updated")</script>';
            }
        }
    ?>
</body>
</html>