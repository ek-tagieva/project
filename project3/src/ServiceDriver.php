<?php
class ServiceDriver implements Serviceinterface
{
    private $price;
    public function __construct(int $price)
    {
        $this->price = $price;
    }
    public function apply(Tariffinterface $tariff, &$price)
    {
        $price += $this->price;
    }
}