<?php

/**
 * Fields Summary:
<<<<<<< HEAD
 * - skincare_Product [select]
 * - Material [select]
 * - Quantity [quantityValue]
=======
 * - skinCareProduct [select]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'SkinCare',
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
         'name' => 'SkincareSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Skincare Specific',
=======
         'name' => 'SkinSpecific',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Skin Specific',
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
             'name' => 'skincare_Product',
             'title' => 'Skincare _ Product',
             'tooltip' => '',
             'mandatory' => false,
=======
             'name' => 'skinCareProduct',
             'title' => 'Skin Care Product',
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
