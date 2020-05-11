<?php
require 'vue/header.php';
?>

<form action="insert.php" method="post">

<div class="form-group">
    <label for="titre" style=justify-content:center;">Titre du film</label>
    <input type="text" class="form-control" name="titre" id="titre" aria-describedby="" placeholder="Saisissez le titre du film" style="width: 25vw;margin-top: 3vh; justify-content: center;"/>
</div>
<br />

<div class="form-group">
        <label for="realisateur">Réalisateur</label>
        <imput type="text" class="form-control" name="realisateur" id="realisateur" aria-describedby="" placeholder="Saisissez le réalisateur du film" style="width: 25vw;"/>
</div>
<br />
<div class="form-group">
    <label for="annee">Année</label>
    <imput type="text" class="form-control" name="annee" id="annee" aria-describedby="" placeholder="Saisissez l'année du film" style="width: 25vw;"/>
</div>
<br/>
<div class="form-group">
    <label for="genre">Genre de Film</label>
    <input type="text" class="form-control" name="genre" id="genre" aria-describedby="" placeholder="Saisissez le genre du film" style="width: 25vw;"/>
</div>
<br />
<div class="form-group">
    <label for="duree">Durée</label>
    <imput type="text" class="form-control" name="duree" id="duree" aria-describedby="" placeholder="Saisissez la durée du film" style="width: 25vw;"/>
</div>

</from>

<a href="insert.php">
                  <button type="button" class="btn btn-primary btn-lg" style="justify-content:center;">Valider</button>
                </a>





















<?php
require 'vue/footer.php';
?>
