
<?php 
session_start ();

if (isset($_SESSION['pseudo']))
{

?>
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3z908r4dp7pqzdnxd7b0phc2rlys8utzat2fztg62wbzvcno"></script>
<script>
tinymce.init({selector:'textarea', language : "fr"});

</script>

<h3 class="titreBillet"><?= $billet['titre'] ?></h3>

<section class="admin">


<a href="?action=Deconnexion">Déconnexion</a>

<h2>Modifier un article</h2>

<form method="POST" action="?action=modifierBillet" enctype="multipart/form-data">
<div>
        <label for="id" id="labelnom">ID :</label>
        <input type="text" value="<?= $billet['id'] ?>" id="id" name="id" placeholder="id" required>
    </div>
    <div>
        <label for="titre" id="labelnom">Titre :</label>
        <input type="text" value="<?= $billet['titre'] ?>" id="titre" name="titre" placeholder="Titre" required>
    </div>
    <div>
        <label for="image" id=labelimage>Image :</label>
        <input type="file" id="image" name="image" placeholder="image" >
    </div>

    <div>
        <label for="contenu">Contenu :</label>
        <textarea type="text" id="contenu" name="contenu" placeholder="Votre contenu" required> <?php echo "".$billet['contenu']."" ?> </textarea>
    </div>
    <div>
        <input type="submit" id="bouton_contact" value="modifier">
    </div>
</form>
   
</section>


<?php
} else {
    echo 'mot de passe incorect';
}
?>

<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3z908r4dp7pqzdnxd7b0phc2rlys8utzat2fztg62wbzvcno"></script>
<script>
// tinymce.init({selector:'textarea', language : "fr"});

</script>

