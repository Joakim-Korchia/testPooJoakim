<?php

require_once 'animauxTools.php' ;

class oiseau extends Animaux {
    public int $ailes;

    public function __construct(int $nbPattes, string $couleur, int $poids, string $pelage, int $ailes)
    {
        parent::__construct(2, $couleur, 0, $pelage);

        $this->ailes = $ailes;

        $this->setPoids($poids);

        echo "Oiseau avec " .$this->ailes . " ailes crée\n";
    }

    /**
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

    public function disMoiTout(): void
    {
        parent::disMoiTout();
        echo ", ailes: " . $this->ailes;
    }
}

$canard = new oiseau(2, 'bleu', 2, 'plumes', 2);

$canard->disMoiTout();