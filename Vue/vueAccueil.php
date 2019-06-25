<?php $this->titre = "Mon Blog"; ?>

<section id="presentation">
    <img id="indexImg" src="Contenu/Images/index.jpg" alt="image de l'index">
</section>

<section id="banniere">
    <div id="banniere_image"><img src="Contenu/Images/banniere.png" alt="image de la bannière"></div>
    <div id="banniere_texte">
        <h2 id="titreBlog">Billet simple pour l'Alaska</h2>
        <p>Je vous souhaite la bienvenue sur mon blog.<br>
        Celui-ci a été créé dans le but de promouvoir mon prochain livre. Je poste mes chapitres sous
        forme d'articles au au fur et à mesure des avancées de mon livre Billet simple pour l'Alaska.
    </p>
    <a href="index.php?action=APropos"><div id="banniere_bouton">Plus sur l'auteur</div></a>
    </div>
</section>

<div id=articles>
<?php foreach ($billets as $billet): ?>
    <section class="billets">
        <div class=billets_image>

        <?php echo "<img src='".$billet['image']."' alt='image de larticle'>" ?>
        
        </div>
        <div class=billets_texte>
            <h3 class="titreBillet"><?= $billet['titre'] ?></h3>
            <br>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>"><div class=billets_bouton>Lire le chapitre</div></a>
        </div>
            
    </section>
<?php endforeach; ?>
</div>