<?php $this->titre = "Mon Blog - " . $billet['titre']; ?>

<section class=les_articles>
<article class="article">
    <div class="article_img">
    <?php echo "<img src='".$billet['image']."'>" ?>
    </div>
    <div>
        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
        <time><?= $billet['dateBillet'] ?></time>
    </div>
    <p><?= $billet['contenu'] ?></p>
</article>

<div class="reponses">
    <h3 id="titreReponses">Réponses à <?= $billet['titre'] ?></h3>

<?php foreach ($commentaires as $commentaire): ?>
<div class=commentaire>
<?php echo "<td><a href='?action=signaler&id=".$commentaire['id']."'>Signaler</a></td>"; ?>
<p><?= $commentaire['auteur'] ?> dit :</p>
<p><?= $commentaire['contenu'] ?></p>
</div>
<?php endforeach; ?>
</div>

<div class=commenter>
<h3>Commentez!</h3>
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>
</div>
</section>