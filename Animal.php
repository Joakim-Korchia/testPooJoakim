<?php

/**
 * Classe représentant un animal.
 * 
 * Cette classe fournit la structure de base pour représenter un animal,
 * avec des attributs pour le nombre de pattes, la couleur, le poids et le type de pelage.
 */


class Animal {
    private int $nbPattes;
    private string $couleur;
    protected int $poids;
    protected string $pelage;

    /**
     * Constructeur de la classe Animal. */

    public function __construct(int $nbPattes, string $couleur, int $poids, string $pelage)
    {
        $this->nbPattes = $nbPattes;
        $this->couleur = $couleur;
        $this->poids= $poids;
        $this->pelage = $pelage;

        echo 'Animal créé : ';
    }

    /**
     * Récupère le nombre de pattes de l'animal.
     */

    /**
     * @return int
     */
    public function getNbPattes(): int
    {
        return $this->nbPattes;
    }
    /**
     * Définit le nombre de pattes de l'animal.
     */ 

    /**
     * @param int $nbPattes
     */
    public function setNbPattes(int $nbPattes): void
    {
        $this->nbPattes = $nbPattes;
    }
    /**
     * Récupère la couleur de l'animal.
     */

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }
     /**
     * Définit la couleur de l'animal.
     */

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * Récupère le poids de l'animal.
     */
    /**
     * @return int Poids de l'animal en kg
     */
    public function getPoids(): int
    {
        return $this->poids;
    }
    
    /**
     * Définit le poids de l'animal.
     */
    /**
     * @param int $poids Poids de l'animal en kg
     */
    /*public function setPoids(int $poids): void
    {
        $poidsMin = 1;
        $poidsMax = 150000;

        if ($poids >= $poidsMin && $poids <= $poidsMax){
            $this->poids=$poids;
        } else {
            echo "Le poids n'est pas valide Michel, il doit être entre $poidsMin et $poidsMax kg.\n";

        }
    }*/

     /**
     * Récupère le type de pelage de l'animal.
     */
    /**
     * @return string
     */
    public function getPelage(): string
    {
        return $this->pelage;
    }

     /**
     * Définit le type de pelage de l'animal.
     */
    /**
     * @param string $pelage
     */
    public function setPelage(string $pelage): void
    {
        $this->pelage = $pelage;
    }

    /**
     * Affiche toutes les caractéristiques de l'animal.
     * Imprime le nombre de pattes, la couleur, le poids et le pelage de l'animal.
     */
    public function disMoiTout(): void


    {
        echo "Nombre de pattes: " . $this->nbPattes . ", Couleur: " . $this->couleur . ", Poids: " . $this->poids . ", Pelage: " . $this->pelage;
    }
}

