<?php
$user= 'root';
$pass= 'root';
$dbh = new PDO('mysql:host=localhost;dbname=Adam', $user, $pass);

$reponse = $dbh -> query ("SELECT * FROM admin WHERE log_admin= '".$_POST['login']."' AND mdp_admin= '".$_POST['password']."'");
$req = $reponse -> fetch();
if($req != False){
    header("Location: gestion.php");

}
    echo "Accès Refusé";












?>
