<?php

/**
 * Fields Summary:
<<<<<<< HEAD
<<<<<<< HEAD
 * - skincare_Product [select]
 * - Material [select]
 * - Quantity [quantityValue]
=======
 * - skinCareProduct [select]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
 * - skinCareProduct [select]
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'SkinCare',
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
         'name' => 'SkincareSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Skincare Specific',
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
         'name' => 'SkinSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Skin Specific',
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
             'name' => 'skincare_Product',
             'title' => 'Skincare _ Product',
             'tooltip' => '',
             'mandatory' => false,
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
             'name' => 'skinCareProduct',
             'title' => 'Skin Care Product',
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
                'key' => 'body oil',
                'value' => 'body oil',
              ),
              1 => 
              array (
                'key' => 'face wash',
                'value' => 'face wash',
              ),
              2 => 
              array (
                'key' => 'body lotion',
                'value' => 'body lotion',
              ),
              3 => 
              array (
                'key' => 'face mask',
                'value' => 'face mask',
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
                'key' => 'Body Oil',
                'value' => 'Body Oil',
              ),
              1 => 
              array (
                'key' => 'Face Wash',
                'value' => 'Face Wash',
              ),
              2 => 
              array (
                'key' => 'Body Lotion',
                'value' => 'Body Lotion',
              ),
              3 => 
              array (
                'key' => 'Face Mask',
                'value' => 'Face Mask',
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
<<<<<<< HEAD
<<<<<<< HEAD
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'Material',
             'title' => 'Material',
             'tooltip' => '',
             'mandatory' => false,
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
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'name' => 'Quantity',
             'title' => 'Quantity',
             'tooltip' => '',
             'mandatory' => false,
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
              0 => 'ml',
            ),
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'defaultValueGenerator' => '',
          )),
=======
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
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
