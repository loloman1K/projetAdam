<?php

/*Fonction qui detail les articles archivés*/
function AfficheArticleHome($idget)
{
  $dbh = new PDO('mysql:host=localhost;dbname=Adam', 'root', 'root');

$reponse = $dbh->query('SELECT * FROM article');
  while ($donnees = $reponse->fetch()) {
    echo "<article>

      <h3>" . $donnees['article_title'] . "</h3>

            <p>" . $donnees['article_text'] . "</p>

        </article>";
  }
}








?>
