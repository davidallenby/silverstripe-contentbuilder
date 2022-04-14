<?php

namespace ContentBuilder\Element;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\TextField;

class GridColumnButton extends GridColumn
{
  private static $singular_name = 'Button';

  private static $plural_name = 'Buttons';

  private static $description = 'Button element';

  private static $table_name = 'GridColumn_Button';

  private static $db = [
    'Alignment' => "Enum('start, center, end', 'start')",
    'Type' => "Enum('primary, outline-primary, secondary, outline-secondary, link', 'primary')",
    'Label' => 'Text',
    'Link' => 'Text',
    'Size' => "Enum('sm, md, lg', 'md')",
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    
    $fields->addFieldToTab('Root.Main', new DropdownField(
      'Alignment',
      'Button alignment',
      [
        "start" => 'Left',
        "center" => "Center",
        "end" => "Right"
      ]
    ));

    $fields->addFieldToTab('Root.Main', new DropdownField(
      'Type',
      'Button type',
      [
        "primary" => 'Primary',
        "outline-primary" => "Primary (Outlined)",
        "secondary" => "Secondary",
        "outline-secondary" => "Secondary (Outlined)",
        "link" => "Link"
      ]
    ));

    $fields->addFieldToTab('Root.Main', new DropdownField(
      'Size',
      'Button size',
      [
        "sm" => 'Small',
        "md" => "Medium",
        "lg" => "Large"
      ]
    ));

    $fields->addFieldToTab('Root.Main', new TextField('Label', 'Button label'));
    $fields->addFieldToTab('Root.Main', new TextField('Link', 'URL'));

    return $fields;
  }
}