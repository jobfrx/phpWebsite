<?php



    session_start();
    if(!empty($_POST)){
        if (isset($_POST['email']) && isset($_POST['wachtwoord'])){
            $_SESSION['email'] = $myusername = mysqli_real_escape_string($db, $_POST["email"]);
            $_SESSION['password'] = $mypassword = mysqli_real_escape_string($db, $_POST["wachtwoord"]);

            $sql = "SELECT * FROM klanten1 WHERE email = '$myusername' and wachtwoord = '$mypassword'";
            $inlogGegevensOphalen = mysqli_query($db, $sql);
            $inlogGegevens = mysqli_fetch_assoc($inlogGegevensOphalen);

            $telRijen = mysqli_num_rows($inlogGegevensOphalen);
            if ($telRijen == 1) {
                $_SESSION['login_user'] = $myusername;
                echo $_SESSION['login_user'];
                header("location: profiel.php");
            } else {
                echo "Je wachtwoord is fout";
            }

        }
    }


    $klantID = $_GET['GetID'];
    $query = "SELECT * FROM klanten1 WHERE klantID = '".$klantID."'";
    $result = mysqli_query($db, $query);

//    while()
        $row = mysqli_fetch_assoc($result);
        $KlantID = $row['klantID'];
        $Fname = $row['naam'];
        $Lname = $row['achternaam'];
        $Email = $row['email'];
        $Phone = $row['telefoonnummer'];
        $Adres = $row['adresgegevens'];
        $Password = $row['wachtwoord'];
?>


    <form class="login" method="post">
        <div class="container">
            <input type="hidden" name="formulier" value="inloggen">

            <label for="email"><b>Email</b></label>
            <input type="text" name="email" autocomplete="off" required> <br>

            <label for="email"><b>Wachtwoord</b></label>
            <input type="password" name="wachtwoord" autocomplete="off" required> <br>

            <button type="submit" class="registerbtn" value="Login!">Login</button>
        </div>
    </form>



<form method="post">
  <div class="container">
    <h1>Registreren</h1>
    <p>Vul A.U.B alle informatie in.</p>
    <hr>

    <label for="voornaam"><b>Voornaam</b></label>
    <input type="text" placeholder="Voornaam..." name="voornaam" required>

    <label for="achternaam"><b>Achternaam</b></label>
    <input type="text" placeholder="Achternaam..." name="achternaam" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email..." name="email" required>

    <label for="telefoonnummer"><b>Telefoonnummer</b></label>
    <input type="text" placeholder="Telefoonnummer..." name="telefoonnummer" required>

    <label for="adres"><b>Adres</b></label>
    <input type="text" placeholder="Adres..." name="adresgegevens" required>

    <label for="wachtwoord"><b>Wachtwoord</b></label>
    <input type="password" placeholder="Wachtwoord..." name="wachtwoord" required>

    <label for="wachtwoord-repeat"><b>Herhaal Wachtwoord</b></label>
    <input type="password" placeholder="Herhaal Wachtwoord..." name="wachtwoord-repeat" required>
    <hr>

    <input type="submit"  name="registreren" class="registerbtn">
  </div>

  <div class="container signin">
    <p>Heb je al een account? <a href="<?php echo WWW_ROOT . "/registreren.php"?>">Log hier in!</a>.</p>
  </div>
</form>

<?php
require_once("../private/initialize.php");
print_r($_POST['registreren']);
if (isset($_POST["registreren"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $telefoonnummer = $_POST['telefoonnummer'];
        $adresgegevens = $_POST['adresgegevens'];
        $wachtwoord = $_POST['wachtwoord'];
        $sql = "INSERT INTO klanten1 (naam, achternaam, email, telefoonnummer, adresgegevens, wachtwoord)
VALUES ('$voornaam','$achternaam','$email','$telefoonnummer', '$adresgegevens','$wachtwoord')";


        echo "de quewy is uitgevoerd";
        header("location: index.php");
        if ($db->query($sql) === TRUE) {
            echo "Nieuwe gebruiker succesvol aangemaakt";

        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }
}

