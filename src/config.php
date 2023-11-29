<?php

/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

$config = [
    "db" => [
        "user" => "hoteladmin",
        "pass" => "opensource",
        "db" => "exam",
        "host" => "admin.remmko.online"
    ],
];

/**
 * Carreguem les classes del Framework Emeset
 */

include "Emeset/Container.php";
include "Emeset/Request.php";
include "Emeset/Response.php";

/**
 * Carreguem els models de l'aplicació
 */
include "models/db.php";
include "models/inscription.php";


