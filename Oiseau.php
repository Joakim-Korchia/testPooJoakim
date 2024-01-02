<?php

require_once 'Animal.php' ;
/**
 * Classe représentant un oiseau.
 * 
 * Cette classe étend la classe Animal et ajoute une spécificité pour le nombre d'ailes.
 * Elle hérite des propriétés et méthodes de la classe Animal et permet de définir le poids et le nombre d'ailes.
 */
class Oiseau extends Animal {
    public int $ailes;

    /**
     * Constructeur de la classe Oiseau.
     * 
     * Initialise un nouvel oiseau avec les caractéristiques spécifiées et définit
     * le nombre de pattes à 2 par défaut pour tous les oiseaux.
     * Affiche un message lors de la création de l'oiseau.
     *
     * @param int $nbPattes Nombre de pattes de l'oiseau (généralement 2).
     * @param string $couleur Couleur de l'oiseau.
     * @param int $poids Poids de l'oiseau en kilogrammes.
     * @param string $pelage Type de pelage (ou plumes) de l'oiseau.
     * @param int $ailes Nombre d'ailes de l'oiseau.
     */

    public function __construct(int $nbPattes, string $couleur, int $poids, string $pelage, int $ailes)
    {
        parent::__construct(2, $couleur, 0, $pelage);

        $this->ailes = $ailes;

        $this->setPoids($poids);

        echo "Oiseau avec " .$this->ailes . " ailes crée\n";
    }

    /**
     * Définit le poids de l'oiseau avec des contraintes.
     * Vérifie si le poids est dans une plage valide avant de l'assigner.
     * Lance une exception si le poids n'est pas valide.
     * @param int $poids Poids du chien en kg.
     */
    public function setPoids(int $poids): void
    {
        $poidsMin = 1; // poids minimum pour un chien en kg
        $poidsMax = 5; // poids maximum pour un chien en kg

        if ($poids >= $poidsMin && $poids <= $poidsMax) {
            $this->poids = $poids;
        } else {
            throw new Error("Ton oiseau est bizaaarre...Il doit être entre $poidsMin et $poidsMax kg.\n");
        }
    }

    /**
     * Affiche toutes les caractéristiques de l'oiseau, y compris le nombre d'ailes.
     * Imprime le nombre de pattes, la couleur, le poids, le pelage, et le nombre d'ailes de l'oiseau.
     */
    
    public function disMoiTout(): void
    {
        parent::disMoiTout();
        echo ", ailes: " . $this->ailes;
    }
}

$canard = new Oiseau(2, 'bleu', 2, 'plumes', 2);

$canard->disMoiTout();