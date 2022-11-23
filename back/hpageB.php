<?php
    session_start();

    include 'connectionDB.php';

    $sql = 'SELECT * FROM collection WHERE user_ID = ' . '"' . $_SESSION['ID'] . '"';

    $query = $db->prepare($sql);

    $query->execute();

    $data = $query->fetch();
    $row = $query->rowCount();

    $_SESSION['nbcard'] = $row;

    echo $_SESSION['nbcard'];



if (isset($_GET['name']) && isset($_GET['price']) && isset($_GET['description'])) 
    {
        $name = htmlspecialchars($_GET['name']);
        $price = htmlspecialchars($_GET['price']);
        $description = htmlspecialchars($_GET['description']);

        $sql = 'INSERT INTO collection (user_ID, name, price, description) VALUE ("' . $_SESSION['ID'] . '","' . $name . '","' . $price . '","' . $description . '")';

        $query = $db->prepare($sql);
    
        $query->execute();
        header('Location:../front/hpage.php');


    }

?>
