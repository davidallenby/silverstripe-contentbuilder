<?php

namespace ContentBuilder\Element;
use SilverStripe\Forms\TextAreaField;

class GridColumnHTML extends GridColumn {
  private static $singular_name = 'HTML content';

  private static $plural_name = 'HTML content columns';

  private static $description = 'Column that allows the user to add custom HTML content';

  private static $table_name = 'GridColumn_HTML';
  
  private static $db = [
    'HTML' => 'HTMLText'
  ];


  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      $fields->addFieldToTab('Root.Main', new TextAreaField('HTML'));
      return $fields;
  }
}