<?php
// Basic configuration of the element
$dataContainerArray = array(
    'label' => array('Demo element', 'Demonstration of some input options'),
    'types' => array('content', 'module'),
    'contentCategory' => 'Sandbox',
    'moduleCategory' => 'Sandbox',
);


// Definition of the fields
$textLine = include('fields/text-line.field.php');
$textLine['label'] = array('Headline');

$textArea = include('fields/text-area.field.php');
$textArea['label'] = array(
    'Description',
    'When typing, keep this and that in mind.'
);

$imageFile = include('fields/image-file.field.php');
$imageFile['label'] = array(
    'Image for the demo element',
    'The file should have the dimensions 42x42 pixels.'
);

$pdfFile = include('fields/pdf-file.field.php');
$pdfFile['label'] = array(
    'PDF file',
    'An arbitrary PDF document.'
);

$linkTarget = include('fields/link-target.field.php');

$radioSelection = include('fields/radio-selection.field.php');
$radioSelection['label'] = array(
    'Demo radio button selection',
    'Description what the buttons should do.'
);
$radioSelection['options'] = array(
    'Value 1' => 'Option 1',
    'Value 2' => 'Option 2',
    'Value 3' => 'Option 3',
);
$radioSelection['default'] = 'Value 2';

$dropdownSelection = include('fields/dropdown-selection.field.php');
$dropdownSelection['options'] = array(
    'Value 1' => 'Option 1',
    'Value 2' => 'Option 2',
    'Value 3' => 'Option 3',
);

$checkboxMultiple = include('fields/checkbox-multiple.field.php');
$checkboxMultiple['options'] = array(
    'Option 1',
    'Option 2',
    'Option 3',
);

$checkboxSingle = include('fields/checkbox-single.field.php');
$checkboxSingle['label'] = array(
    'My Checkbox label',
    'My explanation of the checkbox'
);
$checkboxSingle['default'] = false;

$list = include('fields/list.field.php');
$listEntry = include('fields/text-line.field.php');
$listEntry['label'] = array(
    'Content of the list entry',
    'This entry can be any field type, even another list'
);
$list['label'] = array(
    'My list',
    'This is a comment on how to use the list.'
);
$list['elementLabel'] = array('de' => 'My list entry %s');
$list['fields'] = array(
    'list entry' => $listEntry
);

$optionWizard = include('fields/option-wizard.field.php');
$optionWizard['label'] = array('Mein Optionen-Wizard', 'Erklärungen zum Wizard.');

$listWizard = include('fields/list-wizard.field.php');
$listWizard['label'] = array('Mein List-Wizard', 'Erklärungen zum Wizard.');

$tableWizard = include('fields/table-wizard.field.php');
$tableWizard['label'] = array('Mein Table-Wizard', 'Füge beliebig Zeilen und Spalten hinzu.');

$textLineMitDropdown = include('fields/text-line-with-dropdown.field.php');
$textLineMitDropdown['label'] = array('Text-Zeile mit Dropdown', 'Der Text und die Auswahl im Dropdown gehören unmittelbar zusammen.');
$textLineMitDropdown['options'] = array(
    'tage' => 'Tage',
    'stunden' => 'Stunden',
    'minuten' => 'Minuten',
);


// Definition of the groups
$GRUPPE_1 = array('inputType' => 'group');
$GRUPPE_1['label'] = array('Gruppe 1: Texte und Bilder', 'Beschreibung von Gruppe 1.');

$GRUPPE_2 = array('inputType' => 'group');
$GRUPPE_2['label'] = array('Gruppe 2: Linkziel, Radiobuttons, Dropdown', 'Beschreibung von Gruppe 2.');

$GRUPPE_3 = array('inputType' => 'group');
$GRUPPE_3['label'] = array('Gruppe 3: Spezielles');


// Arrange fields and groups
$dataContainerArray['fields'] = array(
    'gruppe_1' => $GRUPPE_1,
    'ueberschrift' => $textLine,
    'beschreibung' => $textArea,
    'bild' => $imageFile,
    'pdf' => $pdfFile,

    'gruppe_2' => $GRUPPE_2,
    'linkziel' => $linkTarget,
    'radiobuttons' => $radioSelection,
    'dropdown' => $dropdownSelection,
    'checkboxMultiple' => $checkboxMultiple,
    'checkboxSingle' => $checkboxSingle,

    'liste' => $list,  // Remark: Lists automatically create their own groups.

    'gruppe_3' => $GRUPPE_3,
    'optionWizard' => $optionWizard,
    'listWizard' => $listWizard,
    'tableWizard' => $tableWizard,
    'textzeileMitDropdown' => $textLineMitDropdown,
);

return $dataContainerArray;
