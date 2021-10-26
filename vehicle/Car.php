<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake
     *
     * @return bool
     */
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @param bool $hasParkBrake
     *
     * @return self
     */
    public function setParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }

    public function start(): string
    {
        if($this->hasParkBrake == TRUE){
           throw new Exception("The brake is on");
        }
        $this->currentSpeed = 5;
        return "The car has started !";
    }

}