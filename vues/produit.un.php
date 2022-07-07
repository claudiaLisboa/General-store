<?php
// var_dump($produit);
?>
<div id="conteneur-principal" class="page-produit">
    <?php if ($produit !== NULL) : ?>
        <section class="detail">
            <img src="ressources/images/produits/<?= $produit->fichier ?>" alt="<?= $produit->nom ?>">
            <div class="info">
                <p class="nom"><?= $produit->nom ?></p>
                <p class="sku"><?= $produit->sku ?></p>
                <p class="desc"><?= $produit->desc_courte ?></p>
                <p class="couleur"><?= $produit->couleur ?></p>
                <p class="prix"><?= $produit->prix ?> $</p>
            </div>
        </section>
    <?php else : ?>
        <section class="detail">
            <div class="info">
                <p class="desc">Il n'y a pas de produit avec cet id.</p>
            </div>
        </section>
    <?php endif; ?>
</div>