<?php

// Attachement de Car à son parent Véhicule

require_once 'Vehicule.php';

class Car extends Vehicule
{
    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    // Energie utilisée

    private function getEnergy(): string
    {
        return $this->energy;
    }

   // Relier à ALLOWED ENERGIES = permettant de choisir une des deux énergie disponible
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) { /* SELF est utilisé à la place de THIS car il représente la classe et non l'instance */
            $this->energy = $energy;
        }
        return $this;
    }


    // Niveau d'énergie

    private function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    private function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

// Possibilité d'avoir uniquement ses deux ressources possibles pour les énergies utilisées
    private const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
}
