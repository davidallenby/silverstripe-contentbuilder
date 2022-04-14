<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextAreaField;
use SilverStripe\Forms\CheckboxField;

class ElementCalloutText extends BaseElement
{
  private static $singular_name = 'Call out text';

  private static $plural_name = 'Call outs';

  private static $description = 'Call out text that serves as highlighted text content';

  private static $table_name = 'CustomElement_CalloutText';

  
  private static $db = [
      'Content' => 'Text',
      'AlignTitleCenter' => 'Boolean'
  ];
  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    // Create a checkbox to align the title center.
    $fields->addFieldToTab('Root.Main', new CheckboxField('AlignTitleCenter', 'Align the title center?'));
    $fields->addFieldToTab('Root.Main', new TextAreaField('Content'));

    return $fields;
  }

  public function getType()
  {
      return 'Call out text';
  }
}