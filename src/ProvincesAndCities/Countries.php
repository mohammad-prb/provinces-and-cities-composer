<?php

namespace ProvincesAndCities;

class Countries {
    static public $iran = array();
    static public $germany = array();
}

$file_name = __DIR__ . "../countries/iran/provinces_and_main_cities.json";
$file = fopen($file_name, "r");
Countries::$iran["main"] = json_decode(fread($file, filesize($file_name)));

$file_name = __DIR__ . "../countries/iran/provinces_and_all_cities.json";
$file = fopen($file_name, "r");
Countries::$iran["all"] = json_decode(fread($file, filesize($file_name)));

$file_name = __DIR__ . "../countries/germany/provinces_and_all_cities.json";
$file = fopen($file_name, "r");
Countries::$germany["all"] = json_decode(fread($file, filesize($file_name)));
