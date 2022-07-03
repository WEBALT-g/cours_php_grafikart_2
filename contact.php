<?php
$title = "Nous contacter";
$nav = 'contact';
require_once 'config.php';
require_once 'functions.php';
date_default_timezone_set('Europe/Paris');
$heure = (int)($_GET['heure'] ?? (int)date('G'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);
$creneaux = CRENEAUX[$jour];
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
require 'header.php'; 
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus unde quos accusamus adipisci animi, laudantium nostrum alias iure, magni corrupti incidunt. Temporibus dolorem obcaecati itaque molestias natus accusamus modi autem.</p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouvertures</h2>
        <?php if ($ouvert): ?>
            <div class="alert alert-success">
                Le magasin sera ouvert
            </div>
        <?php else: ?>
            <div class="alert alert-danger">
                Le magasin sera fermé
            </div>
        <?php endif; ?>

        <form action="" method="GET">
            <div class="form-group"><br>
                <?= select('jour', $jour, JOURS) ?>
            </div><br>
            <div class="form-group">
                <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
            </div><br>
            <button class="btn btn-primary" type="submit">Voirt si le magasin est ouvert</button>
        </form><br>
        <ul>
            <?php foreach(JOURS as $k => $jour): ?>
                <li <?php if ($k + 1 === (int)date('N')): ?> style="color:<?= $color; ?>" <?php endif ?>>
                    <strong><?= $jour ?></strong>
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<h2>Nous contacter</h2>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus unde quos accusamus adipisci animi, laudantium nostrum alias iure, magni corrupti incidunt. Temporibus dolorem obcaecati itaque molestias natus accusamus modi autem.</p>

<?php require 'footer.php'; ?>