<?php
interface Tariffinterface
{
    public function countPrice(): int;
    public function addService(Serviceinterface $service): self;
    public function getMinutes(): int;
    public function getDistance(): int;
}