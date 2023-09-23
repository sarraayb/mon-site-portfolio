
    <?php
    $dsn = "mysql:dbname=ayeb_sarra_portfolio;host=localhost";
    $user = 'root';
    $password = '';

try {
    $bdd = new PDO($dsn,$user , $password);
                    //mysql:dbname=testdb;host=127.0.0.1
    $bdd->query("set names utf8");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connexion établie avec la base de données ayeb_sarra_portfolio; )";
}
catch (PDOException $e){
    echo "Erreur lors de la connexion: " . $e->getMessage();
}
?>
