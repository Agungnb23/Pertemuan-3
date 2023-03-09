<?php

$TotalHarga = 0;

$TehTarik = 4000;
$AyamFillet = 10000;
$Nutrisari = 4000;
$Signature = 2000;
$Garpit = 2500;

$TotalHarga += $TehTarik;
$TotalHarga += $AyamFillet;
$TotalHarga += $Nutrisari;
$TotalHarga += $Signature;
$TotalHarga += $Garpit;

var_dump($TotalHarga);