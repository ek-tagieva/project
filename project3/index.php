<?php
include 'src/Tariffinterface.php';
include 'src/Serviceinterface.php';
include 'src/TariffAbstract.php';
include 'src/TariffBasic.php';
include 'src/ServiceGPS.php';
include 'src/ServiceDriver.php';
include 'src/TariffHour.php';
include 'src/TariffStudent.php';

/** @var Tariffinterface $tariff */
$tariff = new TariffBasic(5, 60);
//$tariff = new TariffHour(5, 61);
//$tariff = new TariffStudent(5, 60);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();
