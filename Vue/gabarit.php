<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/Css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=ABeeZee|Nunito+Sans:400,700" rel="stylesheet">
    <title><?= $titre ?></title>
</head>

<body>
    <header>
        <div id="titre_header"><h1>Billet simple pour l'Alaska</h1></div>
        <nav>
            <ol>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">A Propos</a></li>
                <li><a href="#">Mes livres</a></li>
                <li><a href="#">Contact</a></li>
            </ol>
        </nav>
    </header>

    <section id="contenu">
        <?= $contenu ?>
    <section>

</body>

<footer id="piedBlog">
        <p>Blog réalisé avec PHP, HTML5 et CSS.</p>
</footer>

</html>