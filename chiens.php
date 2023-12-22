<?php

require_once 'animauxTools.php' ;
class Chien extends Animaux {
    public string $race;

    public function __construct(string $couleur, int $poids, string $pelage, string $race)
    {
        parent::__construct(4, $couleur, 0, $pelage); // Les chiens ont 4 pattes par défaut

        $this->race = $race;

        $this->setPoids($poids);

        echo "Chien de race " .$this->race . " crée\n";
    }

    /**
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

    public function disMoiTout(): void
    {
        parent::disMoiTout();
        echo ", Race: " . $this->race;
    }
}

$chien = new Chien('noir', 10, 'ras', 'Doberman');

$chien->disMoiTout();