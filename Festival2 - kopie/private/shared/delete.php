<?php

    if(isset($_GET['Del']))
    {
        $klantID = $_GET['Del'];
        $query = " DELETE FROM klanten1 WHERE  klantID= '".$klantID."';";
        $result = mysqli_query($db, $query);

        if($result)
        {
            header("location:klanten.php");
        }
        else
        {
            echo "het werkt niet";
        }
    }
    else
    {
        header("location:klanten.php");
    }

