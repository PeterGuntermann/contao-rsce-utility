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
$list['label'] = array('My list', 'This is a comment on how to use the list.');
$list['elementLabel'] = array('en' => 'My list entry %s');
$list['fields'] = array(
    'listEntry' => $listEntry
);

$optionWizard = include('fields/option-wizard.field.php');
$optionWizard['label'] = array('My option wizard', 'Explanations of the wizard.');

$listWizard = include('fields/list-wizard.field.php');
$listWizard['label'] = array('My list wizard', 'Explanations of the wizard.');

$tableWizard = include('fields/table-wizard.field.php');
$tableWizard['label'] = array('My table wizard', 'Add an arbitrary number of rows and columns.');

$textLineWithDropdown = include('fields/text-line-with-dropdown.field.php');
$textLineWithDropdown['label'] = array(
    'Text line with dropdown',
    'The text and the selection in the dropdown belong directly together.'
);
$textLineWithDropdown['options'] = array(
    'days' => 'Days',
    'hours' => 'Hours',
    'minutes' => 'Minutes',
);


// Definition of the groups
$group1 = array('inputType' => 'group');
$group1['label'] = array('Group 1: Texts and images', 'Description of group 1.');

$group2 = array('inputType' => 'group');
$group2['label'] = array('Group 2: Link target, Radio selection, Dropdown selection', 'Description of group 2.');

$group3 = array('inputType' => 'group');
$group3['label'] = array('Group 3: Special');


// Arrange fields and groups
$dataContainerArray['fields'] = array(
    'group1' => $group1,
    'headline' => $textLine,
    'description' => $textArea,
    'image' => $imageFile,
    'pdf' => $pdfFile,

    'group2' => $group2,
    'linkTarget' => $linkTarget,
    'radioSelection' => $radioSelection,
    'dropdownSelection' => $dropdownSelection,
    'checkboxMultiple' => $checkboxMultiple,
    'checkboxSingle' => $checkboxSingle,

    'list' => $list,  // Remark: Lists automatically create their own groups.

    'group3' => $group3,
    'optionWizard' => $optionWizard,
    'listWizard' => $listWizard,
    'tableWizard' => $tableWizard,
    'textLineWithDropdown' => $textLineWithDropdown,
);

return $dataContainerArray;
