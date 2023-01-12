<?php

/**
 * Fields Summary:
<<<<<<< HEAD
 * - Makeup_Type [select]
 * - Quantity [quantityValue]
=======
 * - Makeup_type [select]
 * - quantity [quantityValue]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Makeup',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
<<<<<<< HEAD
   'group' => '',
=======
   'group' => 'Beauty',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
         'name' => 'MakeSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Make Specific',
=======
         'name' => 'MakeupSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'MakeupSpecific',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
             'name' => 'Makeup_Type',
             'title' => 'Makeup _ Type',
             'tooltip' => '',
             'mandatory' => false,
=======
             'name' => 'Makeup_type',
             'title' => 'Makeup _type',
             'tooltip' => '',
             'mandatory' => true,
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
                'key' => 'Lipsticks',
                'value' => 'Lipsticks',
              ),
              1 => 
              array (
                'key' => 'Foundation and primer',
=======
                'key' => 'Lipstick',
                'value' => 'Lipstick',
              ),
              1 => 
              array (
                'key' => 'Foundation',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
                'value' => 'Foundation',
              ),
              2 => 
              array (
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
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
             'name' => 'Quantity',
             'title' => 'Quantity',
             'tooltip' => '',
             'mandatory' => false,
=======
             'name' => 'quantity',
             'title' => 'Quantity',
             'tooltip' => '',
             'mandatory' => true,
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
              0 => 'gm',
              1 => 'ml',
=======
              0 => 'ml',
              1 => 'gm',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
            ),
             'integer' => false,
             'unsigned' => false,
             'minValue' => 1,
<<<<<<< HEAD
             'maxValue' => 10,
=======
             'maxValue' => 30,
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
      'fieldname' => 'BeautySpecific',
=======
      'fieldname' => 'beautySpecific',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
    ),
  ),
));
