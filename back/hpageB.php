<?php
session_start();

include 'connectionDB.php';

$sql = 'SELECT * FROM collection WHERE user_ID = ' . '"' . $_SESSION['ID'] . '"';


$query = $db->prepare($sql);

$query->execute();

$row = $query->rowCount();
$data = $query->fetchAll();

$_SESSION['nbcard'] = $row;






if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0 && isset($_POST['name']) && isset($_POST['price'])) {
        // Récupérer le nom de la photo
        $filename = basename($_FILES['photo']['name']);
    
        // Définir le chemin où enregistrer la photo
        $target_path = "../image/".$filename;
        
        // Enregistrer la photo dans le dossier
        if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
           echo "La photo a été téléchargée avec succès.";
        } else {
           echo "Une erreur est survenue lors du téléchargement de la photo.";
        }

    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);

    

    $sql = 'INSERT INTO collection (user_ID, name, price, description, picture) VALUE ("' . $_SESSION['ID'] . '","' . $name . '","' . $price . '","' . $description . '","' . $filename . '")';

    $query = $db->prepare($sql);

    $query->execute();
    header('Location:../front/hpage.php');
}

