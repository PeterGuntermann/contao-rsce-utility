<?php

// Basic configuration of the element
$dataContainerArray = array(
    'label' => array(
        'Learning element for developers', // Label in the element type dropdown menu
        'Help text in the help wizard'  // When you click on the warning triangle
    ),
    'types' => array(
        'content',  // can be used as content element
        'module'    // can be used as front end module
    ),
    'contentCategory' => 'My custom content category', // category in the element type dropdown menu
    'moduleCategory' => 'My custom module category',   // category in the module type dropdown menu
    /*
    'standardFields' => array(
        'headline',
        'cssID'
    ),
    */
    // These standard fields should be omitted, as they can confuse editors and invite misuse.
);

// Include of needed fields
$textLine = include('fields/text-line.field.php');
$textLine['label'] = array(
    'Super-awesome text field',
    'Associative PHP arrays work as a map and can be easily overwritten.'
);

// Definition of the element's fields
$dataContainerArray['fields'] = array(
    'example_text' => $textLine
    // WARNING: The identifier (here "example_text") is difficult to change afterwards 
    // and should be chosen directly with caution.
);

return $dataContainerArray;
