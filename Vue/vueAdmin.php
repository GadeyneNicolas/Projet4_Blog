<?php 
session_start ();

if (isset($_SESSION['pseudo']))
{

?>


<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3z908r4dp7pqzdnxd7b0phc2rlys8utzat2fztg62wbzvcno"></script>
<!-- <script>tinymce.init({selector:'textarea', language : "fr"});</script> -->

<section id="admin">

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
                        <textarea type="text" id="contenu" name="contenu" placeholder="Votre contenu" required></textarea>
                    </div>
                    <div>
                        <input type="submit" id="bouton_contact" value="Ajouter">
                    </div>
                </form>

                <h2>Liste des articles</h2>
<table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Date d'ajout</th>
            <th>Modifier</th>
            <th>Supprimer</th>

        </tr>
    <?php foreach ($billets as $billet): ?>
        <tr>
            <td><?= $billet['id'] ?></td>
            <td>Nom de l'auteur</td>
            <td><?= $billet['titre'] ?></td>
            <td><?= $billet['date'] ?></td>
            <?php echo "<td><a href='?action=modifierBillet&id=".$billet['id']."'>Modifier</a></td>"; ?>
            <?php echo "<td><a href='?action=supprimerBillet&id=".$billet['id']."'>Supprimer</a></td>"; ?>
        </tr>
    <?php endforeach; ?>
</table>
   
</section>


<?php
} else {
    echo 'mot de passe incorect';
}
?>


