<?php
// var_dump($produits);
// var_dump($categories);

// On récupère le nom de la catégorie du premier produit
// pour pouvoir la montrer active dans le menu à gauche
// et aussi pour le h2 de la section contenu.
$premierProduit = $produits[0];
$categorieActive = $premierProduit->categorie;
?>
<div id="conteneur-principal" class="page-produit">
    <aside>
        <nav>
            <ul>
                <?php
                foreach ($categories as $categorie) {
                    $classActif = "";

                    if ($categorie->nom == $categorieActive) {
                        $classActif = "actif";
                    } else {
                        $classActif = "";
                    }

                    echo "<li>";
                    echo "<a class='" . $classActif . "' href='index.php?route=produit/categorie/" . $categorie->id . "'>" . $categorie->nom . "</a>";
                    echo "</li>";
                }
                ?>
            </ul>
        </nav>
    </aside>
    <section class="contenu">
        <h2>Produits disponibles par catégorie : &laquo; <?= $categorieActive ?> &raquo;</h2>
        <ul>
            <?php
            foreach ($produits as $produit) {
                echo "<li>";
                echo "<a href='index.php?route=produit/un/" . $produit->id . "'>";
                echo "<img src='ressources/images/produits/" . $produit->fichier . "' alt='" . $produit->nom . "'>";
                echo "<div class='info'>";
                echo "<p class='nom'>" . $produit->nom . "</p>";
                echo "<p class='desc'>" . $produit->desc_courte . "</p>";
                echo "<p class='prix'>" . $produit->prix . " $</p>";
                echo "</div>";
                echo "</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </section>
</div>