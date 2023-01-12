<?php

/**
 * Fields Summary:
<<<<<<< HEAD
 * - Hair_Product [select]
 * - Hair_type [select]
=======
 * - hairProduct [select]
 * - hairType [select]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'HairCare',
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
         'name' => 'Hair_specific',
         'type' => NULL,
         'region' => NULL,
<<<<<<< HEAD
         'title' => '',
=======
         'title' => 'Hair_specific',
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
             'name' => 'Hair_Product',
             'title' => 'Hair _ Product  ',
             'tooltip' => '',
             'mandatory' => false,
=======
             'name' => 'hairProduct',
             'title' => 'Hair Product',
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
                'key' => 'Shampoo',
                'value' => 'Shampoo',
              ),
              1 => 
              array (
                'key' => 'Conditioner',
                'value' => 'Conditioner',
              ),
              2 => 
              array (
<<<<<<< HEAD
                'key' => 'Hair oil',
                'value' => 'Hair oil',
              ),
              3 => 
              array (
                'key' => 'Hair serum',
                'value' => 'Hair serum',
=======
                'key' => 'Hair Oil',
                'value' => 'Hair Oil',
              ),
              3 => 
              array (
                'key' => 'Hair Serum',
                'value' => 'Hair Serum',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
              ),
              4 => 
              array (
                'key' => 'Hair Gel',
                'value' => 'Hair Gel',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
<<<<<<< HEAD
             'name' => 'Hair_type',
             'title' => 'Hair _type',
=======
             'name' => 'hairType',
             'title' => 'Hair Type',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
              0 => 
              array (
<<<<<<< HEAD
                'key' => 'All HairType',
                'value' => 'All HairType',
=======
                'key' => 'All Hair Type',
                'value' => 'All Hair Type',
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
              ),
              1 => 
              array (
                'key' => 'Dry Hair',
                'value' => 'Dry Hair',
              ),
              2 => 
              array (
                'key' => 'Normal Hair',
                'value' => 'Normal Hair',
              ),
              3 => 
              array (
<<<<<<< HEAD
                'key' => 'Frizzy Hair',
                'value' => 'Frizzy Hair',
              ),
              4 => 
              array (
                'key' => '',
                'value' => '',
=======
                'key' => 'Freezy Hair',
                'value' => 'Freezy Hair',
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
