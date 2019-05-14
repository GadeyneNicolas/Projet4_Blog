<?php $this->titre = "Mon Blog"; ?>

<section id="banniere">
    <div id="banniere_image"><img src="Contenu/Images/banniere.png"></div>
    <div id="banniere_texte">
        <h2 id="titreBlog">Billet simple pour l'Alaska</h2>
        <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
        <button id="banniere_bouton"><a src="#">En savoir plus.</a></button>
    </div>
</section>

<?php foreach ($billets as $billet):
    ?>
    <section>
        <div>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>"> 
                <h3 class="titreBillet"><?= $billet['titre'] ?></h3></a>
        </div>
            <time><?= $billet['date'] ?></time>
        <p><?= $billet['contenu'] ?></p>
    </section>
    <hr />
<?php endforeach; ?>
