<?php
    if (isset($_POST['pseudo']) AND $_POST['pseudo'] ==  "admin")
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "kangourou")
    // Si le mot de passe est bon
    {
    // On affiche les codes
?>


<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3z908r4dp7pqzdnxd7b0phc2rlys8utzat2fztg62wbzvcno"></script>
<script>tinymce.init({selector:'textarea', language : "fr"});</script>

<section id="admin">

        <h2>Poster un article</h2>
                <form method="post" action="index.php?action=creerBillet">
                    <div>
                        <label for="titre" id="labelnom">Titre :</label>
                        <input type="text" id="titre" name="titre" placeholder="Titre" required>
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
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect.</p>';
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Pseudo incorrect.</p>';
    }
    ?>



