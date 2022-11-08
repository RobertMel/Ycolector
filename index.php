<?php
    session_start();
    include 'connectionDB.php';


    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) 
    {
        $name = htmlspecialchars($_GET['name']);
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);
        $_SESSION['name'] = htmlspecialchars($name); 
        $_SESSION['email'] = htmlspecialchars($email);


        $sql = 'SELECT * FROM user WHERE email = ' . '"' . $email . '"';

        $query = $db->prepare($sql);
    
        $query->execute();

        $data = $query->fetch();
        $row = $query->rowCount();

        if ($row != 0) {
                echo "compte existant";
            }

        if ($row == 0) {
            $sql = 'INSERT INTO user (USERNAME, EMAIL, PASSWORD) VALUE ("' . $name . '","' . $email . '","' . $password . '")';
            $query = $db->prepare($sql);
            $query->execute();
            
            header('Location:hpage.php');
        }
    }
    if (isset($_GET['logEmail']) && isset($_GET['logPassword'])) {
        $email = htmlspecialchars($_GET['logEmail']);
        $password = htmlspecialchars($_GET['logPassword']);

        $sql = 'SELECT * FROM user WHERE email = ' . '"' . $email . '"';

        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetch();
        $row = $query->rowCount();


        if ($row == 0 || $password != $data['password']) {
            echo "mdp ou email faux";
        }
        if ($password == $data['password']) {
            $_SESSION['name'] = htmlspecialchars($data['username']); 
            $_SESSION['email'] = htmlspecialchars($data['email']);

            header('Location:hpage.php');
        }
    }

?>