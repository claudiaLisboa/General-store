<?php
class ProduitControleur extends Controleur
{
    /**
     * Méthode invoquée par défaut si aucune action n'est indiquée
     */
    public function index($params)
    {
        $this->gabarit->affecterActionParDefaut('tout');
        $this->tout($params);
    }

    // route : produit/tout
    public function tout($params)
    {
        // Chercher les données de tous les produits
        $resultat = $this->modele->tout();

        // Injecte le résultat dans la 'vue'
        $this->gabarit->affecter('produits', $resultat);

        // Chercher les catégories
        $resultatCategories = $this->modele->categories();

        // Injecte le résultat dans la 'vue'
        $this->gabarit->affecter('categories', $resultatCategories);
    }

    // route : produit/un
    public function un($params)
    {
        // Chercher les données d'un produit spécifique
        $resultat = $this->modele->un($params);

        // Injecte le résultat dans la 'vue'
        $this->gabarit->affecter('produit', $resultat);
    }

    // route : produit/categorie
    public function categorie($params)
    {
        // Chercher les produits d'une catégorie spécifique
        $resultat = $this->modele->parCategorie($params);

        // Injecte le résultat dans la 'vue'
        $this->gabarit->affecter('produits', $resultat);

        // Chercher les catégories
        $resultatCategories = $this->modele->categories();

        // Injecte le résultat dans la 'vue'
        $this->gabarit->affecter('categories', $resultatCategories);
    }
}
