<?php

namespace ContentBuilder\Element;

use DNADesign\Elemental\Models\BaseElement;

class ElementDivider extends BaseElement
{
  private static $singular_name = 'Divider';

  private static $plural_name = 'Dividers';

  private static $description = 'Horizontal rule that breaks up the content';

  private static $table_name = 'CustomElement_Divider';

  
  private static $db = [
  ];
  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      
      //$fields->removeFieldFromTab('Root.Main');

      return $fields;
  }

  public function getType()
  {
      return 'Divider';
  }
}