<?php

if(isset($_POST['update']))
{





    $klantID = $_GET['ID'];
    $Fname = $_POST['voornaam'];
    $Lname = $_POST['achternaam'];
    $Email = $_POST['email'];
    $Phone = $_POST['telefoonnummer'];
    $Adres = $_POST['adresgegevens'];
    $Password = $_POST['wachtwoord'];

    $query = " UPDATE klanten1 SET naam= '".$Fname."', achternaam= '".$Lname."', email= '".$Email."', telefoonnummer= '".$Phone."', adresgegevens= '".$Adres."', wachtwoord= '".$Password."' WHERE klantID= '".$klantID."';   ";
    $result = mysqli_query($db, $query);
        echo "mysqli_error($query)" . "<br>";
    print_r($Fname);
    if ($result)
    {
        header("location:klanten.php");
    }
    else
    {
        echo "dit ding werkt niet ";
    }
}
else
{
    header("location:klanten.php");
}
