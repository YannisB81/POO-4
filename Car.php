<?php
class Car
{
    const MAX_SPEED = 130;
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake) 
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->hasParkBrake = $hasParkBrake;
    }
    public function setParkBrake()
    {
        $this->hasParkBrake = false;
        return "C'est bon tu peux y aller...";

    }
    public function forward()
    {
        $sentence = "";
        while ($this->currentSpeed < self::MAX_SPEED) {
            $this->currentSpeed = $this->currentSpeed + 10;
            $sentence .= " FASTER !!! (Vitesse: ".$this->currentSpeed.' km/h)'.'<br>';
        }
        $sentence .= "I'm at top speed !";
        return $sentence;
    }
    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed = $this->currentSpeed - 20;
            if ($this->currentSpeed < 0) {
                $this->currentSpeed = 0;
            }
            $sentence .= "Brake !!! (Vitesse: ".$this->currentSpeed.' km/h)'.'<br>';
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function start()
    {
        if ($this->hasParkBrake) {
            throw new Exception("T'as oublié le frein à main, banane!!!");
        }
        $this->currentSpeed = 10;
        return "Go !(Vitesse: ".$this->currentSpeed.' km/h) ';;
    }
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
    public function __toString() 
    {
        return "La voiture ".$this->color." contient ".$this->nbSeats." places et consomme ".$this->energy;
    }
}