<?php
class ServiceGPS implements Serviceinterface
{
    private $pricePerHour;
    public function __construct(int $pricePerHour)
    {
        $this->pricePerHour = $pricePerHour;
    }
    public function apply(Tariffinterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price += $this->pricePerHour * $hours;
    }
}