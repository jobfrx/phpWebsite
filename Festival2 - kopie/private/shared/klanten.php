
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




<h1>Klanten</h1>

    <?php

        $sql = "SELECT * FROM klanten1";
        $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
            $KlantID = $row['klantID'];
            $Fname = $row['naam'];
            $Lname = $row['achternaam'];
            $Email = $row['email'];
            $Phone = $row['telefoonnummer'];
            $Adres = $row['adresgegevens'];
            $Password = $row['wachtwoord'];


    ?>
<table border="1" id="customers">
    <tr>
        <th>klantID</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Email</th>
        <th>Telefoonnummer</th>
        <th>Adres</th>
        <th>Wachtwoord</th>
        <th>Edit</th>
        <th>Profiel</th>
        <th>Delete</th>

    </tr>
    <tr>
        <td><?php echo $KlantID; ?></td>
        <td><?php echo $Fname; ?></td>
        <td><?php echo $Lname; ?></td>
        <td><?php echo $Email; ?></td>
        <td><?php echo $Phone; ?></td>
        <td><?php echo $Adres; ?></td>
        <td><?php echo $Password; ?></td>
        <td><a href="beheer.php?GetID=<?php echo $KlantID ?>">Edit</a></td>
        <td><a href="profiel.php?Profiel=<?php echo $KlantID ?>">Profiel</a></td>
        <td><a href="delete.php?Del=<?php echo $KlantID ?>">Delete</a></td>

    </tr>

</table> <br>



</body>
<?php } ?>
</html>