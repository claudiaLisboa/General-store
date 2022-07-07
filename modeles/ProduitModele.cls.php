<?php
class ProduitModele extends AccesBd
{
    /**
     * Retourne tous les produits
     * 
     * @return object[] Un tableau d'objets représentants tous les produits
     */
    public function tout()
    {
        // Implémentation de la méthode
        $sql = "SELECT produit.*, produit_image.fichier
                FROM produit 
                INNER JOIN categorie ON produit.categorie_id = categorie.id
                LEFT JOIN produit_image ON produit.id = produit_image.produit_id";
        return $this->lireTout($sql);
    }

    public function un($param)
    {
        $sql = "SELECT produit.*, produit_image.fichier
                FROM produit
                LEFT JOIN produit_image ON produit.id = produit_image.produit_id
                WHERE produit.id = ?";
        return $this->lireUn($sql, $param);
    }

    public function categories()
    {
        $sql = "SELECT * FROM categorie";
        return $this->lireTout($sql);
    }

    public function parCategorie($param)
    {
        $sql = "SELECT c.nom AS categorie, p.*, prod_i.fichier
                FROM categorie AS c
                LEFT JOIN produit AS p
                ON c.id = p.categorie_id
                LEFT JOIN produit_image AS prod_i
                ON p.id = prod_i.produit_id
                WHERE c.id = ?";
        return $this->lireTout($sql, $param);
    }
}
