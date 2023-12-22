<?php

require_once 'Animal.php' ;
class Ornithorynque extends Animal {
    public int $queue;
    public string $nez;
    public function __construct(string $couleur, int $poids, string $pelage, int $queue,string $nez )
    {
        parent::__construct(4, $couleur, 0, 'taupe');

        $this->queue = $queue;
        $this->nez = $nez;

        $this->setPoids($poids);

        echo "Ornithoryinque avec " .$this->queue . " queue et un " .$this->nez  . " crée\n";
    }

    /**
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

    public function disMoiTout(): void
    {
        parent::disMoiTout();
        echo ", queue: " . $this->queue;
        echo ", nez: " . $this->nez;
    }
}

$Ornithorynque = new Ornithorynque('rouge', 3, 'taupe', 1, 'bec');

$Ornithorynque->disMoiTout();