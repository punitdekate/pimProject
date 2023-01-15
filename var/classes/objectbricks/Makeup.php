<?php

/**
 * Fields Summary:
<<<<<<< HEAD
<<<<<<< HEAD
 * - Makeup_Type [select]
 * - Quantity [quantityValue]
=======
 * - Makeup_type [select]
 * - quantity [quantityValue]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
 * - Makeup_type [select]
 * - quantity [quantityValue]
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Makeup',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
<<<<<<< HEAD
<<<<<<< HEAD
   'group' => '',
=======
   'group' => 'Beauty',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
   'group' => 'Beauty',
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
<<<<<<< HEAD
<<<<<<< HEAD
         'name' => 'MakeSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Make Specific',
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
         'name' => 'MakeupSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'MakeupSpecific',
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
<<<<<<< HEAD
<<<<<<< HEAD
             'name' => 'Makeup_Type',
             'title' => 'Makeup _ Type',
             'tooltip' => '',
             'mandatory' => false,
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
             'name' => 'Makeup_type',
             'title' => 'Makeup _type',
             'tooltip' => '',
             'mandatory' => true,
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
<<<<<<< HEAD
<<<<<<< HEAD
                'key' => 'Lipsticks',
                'value' => 'Lipsticks',
              ),
              1 => 
              array (
                'key' => 'Foundation and primer',
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
                'key' => 'Lipstick',
                'value' => 'Lipstick',
              ),
              1 => 
              array (
                'key' => 'Foundation',
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
                'value' => 'Foundation',
              ),
              2 => 
              array (
<<<<<<< HEAD
<<<<<<< HEAD
                'key' => 'kajal and eyeliner',
                'value' => 'kajal ',
              ),
              3 => 
              array (
                'key' => 'Highlighter',
                'value' => 'Highlighter',
              ),
              4 => 
              array (
                'key' => 'nailpolish',
                'value' => 'nailpolish',
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
                'key' => 'Primer',
                'value' => 'Primer',
              ),
              3 => 
              array (
                'key' => 'Kajal',
                'value' => 'Kajal',
              ),
              4 => 
              array (
                'key' => 'Mascara',
                'value' => 'Mascara',
              ),
              5 => 
              array (
                'key' => 'Highlighter',
                'value' => 'Highlighter',
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
<<<<<<< HEAD
<<<<<<< HEAD
             'name' => 'Quantity',
             'title' => 'Quantity',
             'tooltip' => '',
             'mandatory' => false,
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
             'name' => 'quantity',
             'title' => 'Quantity',
             'tooltip' => '',
             'mandatory' => true,
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'quantityValue',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'unitWidth' => '',
             'defaultValue' => NULL,
             'defaultUnit' => NULL,
             'validUnits' => 
            array (
<<<<<<< HEAD
<<<<<<< HEAD
              0 => 'gm',
              1 => 'ml',
=======
              0 => 'ml',
              1 => 'gm',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
              0 => 'ml',
              1 => 'gm',
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
            ),
             'integer' => false,
             'unsigned' => false,
             'minValue' => 1,
<<<<<<< HEAD
<<<<<<< HEAD
             'maxValue' => 10,
=======
             'maxValue' => 30,
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
             'maxValue' => 30,
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => '',
         'labelWidth' => 0,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'beauty',
<<<<<<< HEAD
<<<<<<< HEAD
      'fieldname' => 'BeautySpecific',
=======
      'fieldname' => 'beautySpecific',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
      'fieldname' => 'beautySpecific',
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
    ),
  ),
));
