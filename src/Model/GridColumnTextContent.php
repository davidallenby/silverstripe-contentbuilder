<?php
namespace ContentBuilder\Element;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class GridColumnTextContent extends GridColumn {
  private static $singular_name = 'Text content';

  private static $plural_name = 'Text content columns';

  private static $description = 'Columns that allow the user to add text content';

  private static $table_name = 'GridColumn_TextContent';
  
  private static $db = [
    'Content' => 'HTMLText'
  ];


  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      
      $fields->addFieldToTab('Root.Main', new HTMLEditorField('Content'));
      return $fields;
  }
}