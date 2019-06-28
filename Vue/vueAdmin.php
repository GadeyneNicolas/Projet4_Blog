<?php 
if (isset($_SESSION['pseudo']))
{

?>

<section class="admin">

<a href="?action=Deconnexion">Déconnexion</a>



                <h2>Liste des articles</h2>

                <a href="?action=Ajouter">Ajouter un article.</a>
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
            <?php echo "<td><a href='?action=Modifier&id=".$billet['id']."'>Modifier</a></td>"; ?>
            <?php echo "<td><a href='?action=supprimerBillet&id=".$billet['id']."'>Supprimer</a></td>"; ?>
        </tr>
    <?php endforeach; ?>
</table>

<table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Date d'ajout</th>
            <th>Contenu</th>
            <th>Signalé</th>
            <th>Supprimer</th>

        </tr>
    <?php foreach ($commentaires as $commentaireAffichage): ?>
        <tr>
            <td><?= $commentaireAffichage['id'] ?></td>
            <td><?= $commentaireAffichage['auteur'] ?></td>
            <td><?= $commentaireAffichage['date'] ?></td>
            <td><?= $commentaireAffichage['contenu'] ?></td>
            <td><?= $commentaireAffichage['signaler'] ?></td>
            <?php echo "<td><a href='?action=supprimerCommentaire&id=".$commentaireAffichage['id']."'>Supprimer</a></td>"; ?>
        </tr>
    <?php endforeach; ?>
</table>


</section>


<?php
} else {
    echo 'mot de passe incorect';
}
?>

<!-- 
<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3z908r4dp7pqzdnxd7b0phc2rlys8utzat2fztg62wbzvcno"></script>
<script>
tinymce.init({selector:'textarea', language : "fr"});
</script> -->
