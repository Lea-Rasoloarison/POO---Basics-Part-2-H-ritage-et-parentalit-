<?php

// Attachement de Camion à son parent Véhicule

require_once 'Vehicule.php';

class Truck extends Vehicule
{
    public string $energy;
    private string $chargementLevel = 'empty';

    public function __construct(string $color, int $nbSeats, string $energy, string $chargementLevel)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->chargementLevel = $chargementLevel;

    }

    // Energie utilisée

    private function getEnergy(): string
    {
        return $this->energy;
    }

    // Relier à ALLOWED ENERGIES = permettant de choisir une des deux énergie disponible
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) { /* SELF est utilisé à la place de THIS car il représente la classe et non l'instance */
            $this->energy = $energy;
        }
        return $this;
    }

    // Relier à ALLOWED CHARGEMENT  = permettant de choisir le niveau de chargement du camion
    private function setChargement(string $chargementLevel): Truck
    {
        if (in_array($chargementLevel, self::ALLOWED_CHARGEMENT)) { /* SELF est utilisé à la place de THIS car il représente la classe et non l'instance */
            $this->chargementLevel = $chargementLevel;
        }
        return $this;
    }

    // Niveau de chargement

    private function getchargementLevel(): string
    {
        return $this->chargementLevel;
    }

    private function setEnergyLevel(string $chargementLevel): void
    {
        $this->chargementLevel = $chargementLevel;
    }


    // Chargement du Camion

    // Possibilité d'avoir uniquement ses deux ressources possibles pour les énergies utilisées
    private const ALLOWED_CHARGEMENT= [
        'in filling',
        'full',
    ];
}