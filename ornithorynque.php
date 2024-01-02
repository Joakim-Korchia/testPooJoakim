<?php

require_once 'Animal.php' ;

/**
 * Classe représentant un ornithorynque.
 * 
 * Cette classe étend la classe Animal et ajoute des spécificités pour la queue et le nez.
 * Elle hérite des propriétés et méthodes de la classe Animal et permet de définir le poids, la queue et le nez.
 */

class Ornithorynque extends Animal {
    public int $queue;
    public string $nez;

    /**
     * Constructeur de la classe Ornithorynque.
     * 
     * Initialise un nouvel ornithorynque avec les caractéristiques spécifiées et définit
     * le nombre de pattes à 4 et le pelage à 'taupe' par défaut pour tous les ornithorynques.
     * Affiche un message lors de la création de l'ornithorynque.
     *
     * @param string $couleur Couleur de l'ornithorynque.
     * @param int $poids Poids de l'ornithorynque en kilogrammes.
     * @param string $pelage Type de pelage (généralement 'taupe' pour les ornithorynques).
     * @param int $queue Longueur de la queue de l'ornithorynque.
     * @param string $nez Type de nez de l'ornithorynque.
     */
    
    public function __construct(string $couleur, int $poids, string $pelage, int $queue,string $nez )
    {
        parent::__construct(4, $couleur, 0, 'taupe');

        $this->queue = $queue;
        $this->nez = $nez;

        $this->setPoids($poids);

        echo "Ornithoryinque avec " .$this->queue . " queue et un " .$this->nez  . " crée\n";
    }

    /**
     * Définit le poids de l'ornithorynque avec des contraintes.
     * Vérifie si le poids est dans une plage valide avant de l'assigner.
     * Lance une exception si le poids n'est pas valide.
     * @param int $poids Poids du chien en kg.
     */
    public function setPoids(int $poids): void
    {
        $poidsMin = 1; // poids minimum pour un chien en kg
        $poidsMax = 4; // poids maximum pour un chien en kg

        if ($poids >= $poidsMin && $poids <= $poidsMax) {
            $this->poids = $poids;
        } else {
            throw new Error("Déjà que l'ornimachin est bizarre, il peut pas avoir ce poids non plus, réfléchis Michel...Il doit être entre $poidsMin et $poidsMax kg.\n");
        }
    }

    /**
     * Affiche toutes les caractéristiques de l'ornithorynque, y compris la queue et le nez.
     * Imprime le nombre de pattes, la couleur, le poids, le pelage, la longueur de la queue, et le type de nez de l'ornithorynque.
     */
    
    public function disMoiTout(): void
    {
        parent::disMoiTout();
        echo ", queue: " . $this->queue;
        echo ", nez: " . $this->nez;
    }
}

$Ornithorynque = new Ornithorynque('rouge', 3, 'taupe', 1, 'bec');

$Ornithorynque->disMoiTout();