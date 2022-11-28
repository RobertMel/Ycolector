<?php
    session_start();

    include 'connectionDB.php';

    $sql = 'SELECT * FROM collection WHERE user_ID = ' . '"' . $_SESSION['ID'] . '"';


    $query = $db->prepare($sql);

    $query->execute();

    $row = $query->rowCount();
    $data = $query->fetchAll();

    $_SESSION['nbcard'] = $row;

    



if (isset($_GET['name']) && isset($_GET['price']) && isset($_GET['description'])) 
    {
        $name = htmlspecialchars($_GET['name']);
        $price = htmlspecialchars($_GET['price']);
        $description = htmlspecialchars($_GET['description']);
        $image = file_get_contents($_GET['picture']);

        $sql = 'INSERT INTO collection (user_ID, name, price, description, picture) VALUE ("' . $_SESSION['ID'] . '","' . $name . '","' . $price . '","' . $description . '","' . $image . '")';

        $query = $db->prepare($sql);
    
        $query->execute();
        header('Location:../front/hpage.php');


    }

?>
