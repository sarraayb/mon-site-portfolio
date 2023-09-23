<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php
     session_start();

     // Détruit toutes les variables de session
     $_SESSION = array();
     
     // Si vous voulez détruire complètement la session, effacez également
     // le cookie de session.
     // Note : cela détruira la session et pas seulement les données de session !
     if (ini_get("session.use_cookies")) {
         $params = session_get_cookie_params();
         setcookie(session_name(), '', time() - 42000,
             $params["path"], $params["domain"],
             $params["secure"], $params["httponly"]
         );
     }
     
    session_destroy();
    if (isset($_SESSION['connected'])) {
        echo $_SESSION['connected'];    
    }
    else {
        header('Location: old_index.php');
        
    }
    
    ?>

</body>
</html>