<?php
require_once( dirname(__FILE__) . "/components/header.php");
require_once(dirname(__FILE__) . "/components/navbar.php");
?>
<div class="container">
    <div class="row">
    <?php
        require_once( dirname(__FILE__) . "/configs/database.php");
        $req = $db->prepare("SELECT id, author_id, title, description, image_url, location, statut, DATE_FORMAT(created_at, 'Le %d/%m/%Y à %Hh%i') as created_at FROM ads");
        $req->execute();
        while( $result = $req->fetch(PDO::FETCH_ASSOC) ){
        ?>

            <div class="card" style="width: 18rem;">
            <img src="<?= $result["image_url"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $result["title"]; ?></h5>
                <p class="card-text"><?= $result["description"]; ?></p>
                <span>Auteur - <?= $result["created_at"]; ?></span>
    
                <a href="" class="btn btn-primary">Voir l'annonce</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php
require_once( dirname(__FILE__) . "/components/footer.php");
?>