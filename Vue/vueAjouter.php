<?php 
if (isset($_SESSION['pseudo']))
{

?>

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3z908r4dp7pqzdnxd7b0phc2rlys8utzat2fztg62wbzvcno"></script>
<script>tinymce.init({selector:'textarea', language : "fr"});</script>

<section class="admin">

<a href="?action=Deconnexion">Déconnexion</a>

<h2>Poster un article</h2>

<form method="post" action="index.php?action=creerBillet" enctype="multipart/form-data">
    <div>
        <label for="titre" id="labelnom">Titre :</label>
        <input type="text" id="titre" name="titre" placeholder="Titre" required>
    </div>
    <div>
        <label for="image" id=labelimage>Image :</label>
        <input type="file" id="image" name="image" placeholder="image" required>
    </div>

    <div>
        <label for="contenu">Contenu :</label>
        <textarea type="text" id="contenu" name="contenu" placeholder="Votre contenu" ></textarea>
    </div>
    <div>
        <input type="submit" id="bouton_contact" value="Ajouter">
    </div>
</form>

</section>

<?php
} else {
    echo 'mot de passe incorect';
}
?>



