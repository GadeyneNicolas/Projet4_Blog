<?php $this->titre = "Mon Blog"; ?>

<section id="presentation">
    <img id="indexImg" src="Contenu/Images/index.jpg">
</section>

<section id="banniere">
    <div id="banniere_image"><img src="Contenu/Images/banniere.png"></div>
    <div id="banniere_texte">
        <h2 id="titreBlog">Billet simple pour l'Alaska</h2>
        <p>Je vous souhaite la bienvenue sur mon blog.<br>
        Celui-ci a été créé dans le but de promouvoir mon prochain livre. Je poste mes chapitres sous
        forme d'articles au au fur et à mesure des avancées de mon livre Billet simple pour l'Alaska.
    </p>
        <button id="banniere_bouton"><a href="index.php?action=APropos">Plus sur l'auteur</a></button>
    </div>
</section>

<div id=articles>
<?php foreach ($billets as $billet):
    ?>
    <section class="billets">
        <div>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>"> 
                <h3 class="titreBillet"><?= $billet['titre'] ?></h3></a>
        </div>
            <time><?= $billet['date'] ?></time>
        <p><?= $billet['contenu'] ?></p>
    </section>
<?php endforeach; ?>
</div>