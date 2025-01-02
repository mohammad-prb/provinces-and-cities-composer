<?php

namespace ProvincesAndCities;

class Countries {
    static public $Iran = array();
    static public $Germany = array();
}

$file_name = "../countries/iran/provinces_and_main_cities.json";
$file = fopen($file_name, "r");
Countries::$Iran["main"] = json_decode(fread($file, filesize($file_name)));

$file_name = "../countries/iran/provinces_and_all_cities.json";
$file = fopen($file_name, "r");
Countries::$Iran["all"] = json_decode(fread($file, filesize($file_name)));

$file_name = "../countries/germany/provinces_and_all_cities.json";
$file = fopen($file_name, "r");
Countries::$Germany["all"] = json_decode(fread($file, filesize($file_name)));
