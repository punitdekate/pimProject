<?php

/**
 * Fields Summary:
 * - dialShape [select]
 * - strapMaterial [select]
<<<<<<< HEAD
 * - features [multiselect]
=======
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'SmarWatch',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Electronics',
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
         'name' => 'smartWatch',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Smart Watch',
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
             'name' => 'dialShape',
             'title' => 'Dial Shape',
             'tooltip' => '',
             'mandatory' => true,
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
                'key' => 'Circle',
                'value' => 'Circle',
              ),
              1 => 
              array (
                'key' => 'Curved',
                'value' => 'Curved',
              ),
              2 => 
              array (
                'key' => 'Oval',
                'value' => 'Oval',
              ),
              3 => 
              array (
                'key' => 'Square',
                'value' => 'Square',
              ),
              4 => 
              array (
                'key' => 'Rectangle',
                'value' => 'Rectangle',
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
             'name' => 'strapMaterial',
             'title' => 'Strap Material',
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
                'key' => 'Silicon',
                'value' => 'Silicon',
              ),
              1 => 
              array (
                'key' => 'Fabric',
                'value' => 'Fabric',
              ),
              2 => 
              array (
                'key' => 'Nylon',
                'value' => 'Nylon',
              ),
              3 => 
              array (
                'key' => 'Rubber',
                'value' => 'Rubber',
              ),
              4 => 
              array (
                'key' => 'Aluminium',
                'value' => 'Aluminium',
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
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'name' => 'features',
             'title' => 'Features',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'multiselect',
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
                'key' => 'Heart Rate Monitor',
                'value' => 'Heart Rate Monitor',
              ),
              1 => 
              array (
                'key' => 'GPS',
                'value' => 'GPS',
              ),
              2 => 
              array (
                'key' => 'Calls',
                'value' => 'Calls',
              ),
              3 => 
              array (
                'key' => 'Smart Notification',
                'value' => 'Smart Notification',
              ),
              4 => 
              array (
                'key' => 'Water Resistance',
                'value' => 'Water Resistance',
              ),
              5 => 
              array (
                'key' => 'Mic',
                'value' => 'Mic',
              ),
              6 => 
              array (
                'key' => 'Google Assistant',
                'value' => 'Google Assistant',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
          )),
=======
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
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
      'classname' => 'Electronics',
      'fieldname' => 'productSpecific',
    ),
  ),
));
