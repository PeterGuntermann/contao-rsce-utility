<?php
// Grundlegende Konfiguration des Elements
$dataContainerArray = array(
    'label' => array('Demo-Element', 'Demonstration einiger Eingabemöglichkeiten'),
    'types' => array('content', 'module'),
    'contentCategory' => 'Sandbox',
    'moduleCategory' => 'Sandbox',
);


// Definition der Felder
$textzeile = include('fields/textzeile.field.php');
$textzeile['label'] = array('Überschrift');

$textblock = include('fields/textblock.field.php');
$textblock['label'] = array(
    'Beschreibung',
    'Beachte bei der Eingabe dies und das und jenes!'
);

$bilddatei = include('fields/bilddatei.field.php');
$bilddatei['label'] = array(
    'Bild zum Demoelement',
    'Die Datei sollte die Ausmaße 42x42 Pixel haben.'
);

$pdfdatei = include('fields/pdf-datei.field.php');
$pdfdatei['label'] = array(
    'PDF-Datei',
    'Ein beliebiges PDF-Dokument im Ordner "media".'
);

$linkziel = include('fields/linkziel.field.php');

$radiobuttons = include('fields/radiobuttons.field.php');
$radiobuttons['label'] = array('Demo-Radiobuttons', 'Beschreibung, was die Buttons tun sollen.');
$radiobuttons['options'] = array(
    'Wert 1' => 'Auswahloption 1',
    'Wert 2' => 'Auswahloption 2',
    'Wert 3' => 'Auswahloption 3',
);
$radiobuttons['default'] = 'Wert 2';

$dropdown = include('fields/dropdown.field.php');
$dropdown['options'] = array(
    'Wert 1' => 'Auswahloption 1',
    'Wert 2' => 'Auswahloption 2',
    'Wert 3' => 'Auswahloption 3',
);

$checkboxMultiple = include('fields/checkbox-multiple.field.php');
$checkboxMultiple['options'] = array(
    'Auswahloption 1',
    'Auswahloption 2',
    'Auswahloption 3',
);

$checkboxSingle = include('fields/checkbox-single.field.php');
$checkboxSingle['label'] = array('Mein Checkbox-Label', 'Meine Erklärung der Checkbox');
$checkboxSingle['default'] = false;

$liste = include('fields/liste.field.php');
$listeneintrag = include('fields/textzeile.field.php');
$listeneintrag['label'] = array(
    'Inhalt des Listeneintrags',
    'kann jedes beliebige andere field sein, sogar wieder eine Liste'
);
$liste['label'] = array('Meine Liste', 'Kommentar mit Anweisungen zur Benutzung der Liste.');
$liste['elementLabel'] = array('de' => 'Mein Listeneintrag %s');
$liste['fields'] = array(
    'listeneintrag' => $listeneintrag
);


$optionWizard = include('fields/option-wizard.field.php');
$optionWizard['label'] = array('Mein Optionen-Wizard', 'Erklärungen zum Wizard.');

$listWizard = include('fields/list-wizard.field.php');
$listWizard['label'] = array('Mein List-Wizard', 'Erklärungen zum Wizard.');

$tableWizard = include('fields/table-wizard.field.php');
$tableWizard['label'] = array('Mein Table-Wizard', 'Füge beliebig Zeilen und Spalten hinzu.');

$textzeileMitDropdown = include('fields/textzeile-mit-dropdown.field.php');
$textzeileMitDropdown['label'] = array('Text-Zeile mit Dropdown', 'Der Text und die Auswahl im Dropdown gehören unmittelbar zusammen.');
$textzeileMitDropdown['options'] = array(
    'tage' => 'Tage',
    'stunden' => 'Stunden',
    'minuten' => 'Minuten',
);


// Definition der Gruppen
$GRUPPE_1 = array('inputType' => 'group');
$GRUPPE_1['label'] = array('Gruppe 1: Texte und Bilder', 'Beschreibung von Gruppe 1.');

$GRUPPE_2 = array('inputType' => 'group');
$GRUPPE_2['label'] = array('Gruppe 2: Linkziel, Radiobuttons, Dropdown', 'Beschreibung von Gruppe 2.');

$GRUPPE_3 = array('inputType' => 'group');
$GRUPPE_3['label'] = array('Gruppe 3: Spezielles');


// Arrangieren der Felder und Gruppen
$dataContainerArray['fields'] = array(
    'gruppe_1' => $GRUPPE_1,
    'ueberschrift' => $textzeile,
    'beschreibung' => $textblock,
    'bild' => $bilddatei,
    'pdf' => $pdfdatei,

    'gruppe_2' => $GRUPPE_2,
    'linkziel' => $linkziel,
    'radiobuttons' => $radiobuttons,
    'dropdown' => $dropdown,
    'checkboxMultiple' => $checkboxMultiple,
    'checkboxSingle' => $checkboxSingle,

    'liste' => $liste,  // Anmerkung: Listen erzeugen automatisch eine eigene Gruppe

    'gruppe_3' => $GRUPPE_3,
    'optionWizard' => $optionWizard,
    'listWizard' => $listWizard,
    'tableWizard' => $tableWizard,
    'textzeileMitDropdown' => $textzeileMitDropdown,
);

return $dataContainerArray;
