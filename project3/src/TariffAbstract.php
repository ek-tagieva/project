<?php
abstract class TariffAbstract implements Tariffinterface
{
    protected $pricePerKilometer;
    protected $pricePerMinute;
    protected $distance;
    protected $minutes;

    /** @var Serviceinterface[] */
    protected $services = [];

    public function __construct(int $distance, int $minutes)
    {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }

    public function countPrice(): int
    {
       $price = $this->distance * $this->pricePerKilometer + $this->minutes * $this->pricePerMinute;

       if ($this->services){
            foreach ($this->services as $service){
                $service->apply($this, $price);
            }
       }

       return $price;
    }

    public function addService(Serviceinterface $service): Tariffinterface
    {
        array_push($this->services, $service);
        return $this;
    }

    public function getMinutes(): int
    {
       return $this->minutes;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}