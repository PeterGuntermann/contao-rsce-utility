<?php

// Grundlegende Konfiguration des Elements
$dataContainerArray = array(
    'label' => array(
        'Lernelement für Entwickler',  // Bezeichnung im Elementtyp-Dropdown
        'Hilfetext im Help-Wizard'     // wenn man auf das Warndreieck klickt
    ),
    'types' => array(
        'content',  // verfügbar als Inhaltselement
        'module'    // verfügbar als Frontend-Modul
    ),
    'contentCategory' => 'Sandbox', // Kategorie im Elementtyp-Dropdown
    'moduleCategory' => 'Sandbox',  // Kategorie im Modultyp-Dropdown
    /*
    'standardFields' => array(
        'headline',
        'cssID'
    ),
    */
    // Auf diese Standardfelder sollte verzichtet werden, da sie Redakteure verwirren können und zum Missbrauch einladen.
);

// Include benötigter Felder
$textField = include('fields/textzeile.field.php');
$textField['label'] = array(
    'Super-awesome text field',
    'Assoziative PHP-Arrays funktionieren als Map und können einfach überschrieben werden.'
);

// Definition der Felder des Elements
$dataContainerArray['fields'] = array(
    'beispiel_text' => $textField
    // WARNUNG: Der Bezeichner (hier "beispiel_text") ist im Nachhinein nur schwer veränderbar
    // und sollte direkt mit Bedacht gewählt werden.
);

return $dataContainerArray;
