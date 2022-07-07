<?php
// var_dump($produits);
// var_dump($categories);
?>
<div id="conteneur-principal" class="page-produit">
    <aside>
        <nav>
            <ul>
                <?php
                foreach ($categories as $categorie) {
                    echo "<li><a href='index.php?route=produit/categorie/" . $categorie->id . "'>" . $categorie->nom . "</a></li>";
                }
                ?>
            </ul>
        </nav>
    </aside>
    <section class="contenu">
        <h2>Produits disponibles</h2>
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