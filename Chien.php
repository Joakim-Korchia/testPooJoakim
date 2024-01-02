<?php

require_once 'Animal.php' ;
/**
 * Classe représentant un chien.
 * 
 * Cette classe étend la classe Animal et ajoute une spécificité pour la race du chien.
 * Elle hérite des propriétés et méthodes de la classe Animal et permet de définir le poids et la race.
 */
class Chien extends Animal {
    public string $race;
   /**
     * Constructeur de la classe Chien.
     * 
     * Initialise un nouveau chien avec les caractéristiques spécifiées et définit
     * le nombre de pattes à 4 par défaut pour tous les chiens.
     * Affiche un message lors de la création du chien.
     *
     * @param string $couleur Couleur du chien.
     * @param int $poids Poids du chien en kilogrammes.
     * @param string $pelage Type de pelage du chien.
     * @param string $race Race du chien.
     */
    public function __construct(string $couleur, int $poids, string $pelage, string $race)
    {
        parent::__construct(4, $couleur, 0, $pelage); // Les chiens ont 4 pattes par défaut

        $this->race = $race;

        $this->setPoids($poids);

        echo "Chien de race " .$this->race . " crée\n";
    }

    /**
     * Définit le poids du chien avec des contraintes.
     * Vérifie si le poids est dans une plage valide avant de l'assigner.
     * Lance une exception si le poids n'est pas valide.
     * @param int $poids Poids du chien en kg.
     */
    public function setPoids(int $poids): void
    {
        $poidsMin = 1; // poids minimum pour un chien en kg
        $poidsMax = 100; // poids maximum pour un chien en kg

        if ($poids >= $poidsMin && $poids <= $poidsMax) {
            $this->poids = $poids;
        } else {
            throw new Error("Ton chien est soit un microbe, soit un éléphant, réfléchis Michel...Il doit être entre $poidsMin et $poidsMax kg.\n");
        }
    }
    /**
     * Affiche toutes les caractéristiques du chien, y compris la race.
     * Imprime le nombre de pattes, la couleur, le poids, le pelage et la race du chien.
     */
    public function disMoiTout(): void
    {
        parent::disMoiTout();
        echo ", Race: " . $this->race;
    }
}

$chien = new Chien('noir', 10, 'ras', 'Doberman');

$chien->disMoiTout();