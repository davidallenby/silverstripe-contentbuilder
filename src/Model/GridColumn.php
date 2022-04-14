<?php



use SilverStripe\ORM\DataObject;
use Camplete\Models\ElementGrid;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\TextField;

class GridColumn extends DataObject
{
  private static $singular_name = 'Grid column';

  private static $plural_name = 'Grid columns';

  private static $description = 'Columns that can be used in Grid Elements';

  private static $table_name = 'GridColumn';
  
  private static $db = [
    'SortOrder' => 'Int',
    'Xs' => 'Int(12)',
    'Sm' => 'Int(12)',
    'Md' => 'Int(12)',
    'Lg' => 'Int(12)',
    'Xl' => 'Int(12)',
    'AdditionalClasses' => 'Text'
  ];

  private static $defaults = [
    12 => 'Xs',
    12 => 'Sm',
    12 => 'Md',
    12 => 'Lg',
    12 => 'Xl'
  ];

  private static $summary_fields = [
    'SortOrder' => 'Sort order',
    'ClassName' => 'Type'
  ];

  private static $has_one = [
    'Grid' => ElementGrid::class
  ];

  private static $default_sort = 'SortOrder';

  function getTemplate()
  {
      $template = $this->owner->ClassName;

      //Do your template logic checks in here to work out what you want to display

      return $template;
  }

  function forTemplate()
  {
      return $this->renderWith(array($this->Template, $this->owner->ClassName));
  }

  public function getCMSFields()
  {
      $fields = parent::getCMSFields();

      $fields->removeFieldFromTab('Root.Main', 'GridID');
      $fields->removeFieldFromTab('Root.Main', 'SortOrder');

      // Options for the dropdowns
      $grid_size_options = [
        12 => 'Full Width (12 Columns)',
        11 => '11 Columns',
        10 => '10 Columns',
        9 => '9 Columns',
        8 => '8 Columns',
        7 => '7 Columns',
        6 => 'Half width (6 Columns)',
        5 => '5 Columns',
        4 => '1/3 Width (4 Columns)',
        3 => '1/4 Width (3 Columns)',
        2 => '2 Columns',
        1 => '1 Column' 
      ];
      
      // Add the Device Size Fields
      $fields->addFieldToTab('Root.Settings', new HeaderField('Header', 'Device Column Sizes'));
      $fields->addFieldToTab('Root.Settings', new DropdownField(
        'Xs', 'Mobile', $grid_size_options
      ));
      $fields->addFieldToTab('Root.Settings', new DropdownField(
        'Sm', 'Larger Mobile', $grid_size_options
      ));
      $fields->addFieldToTab('Root.Settings', new DropdownField(
        'Md', 'Tablet', $grid_size_options
      ));
      $fields->addFieldToTab('Root.Settings', new DropdownField(
        'Lg', 'Laptop', $grid_size_options
      ));
      $fields->addFieldToTab('Root.Settings', new DropdownField(
        'Xl', 'Desktop', $grid_size_options
      ));

      // Add additional settings fields
      $fields->addFieldToTab('Root.Settings', new HeaderField('Header', 'Additional settings'));
      $fields->addFieldToTab('Root.Settings', new TextField('AdditionalClasses', 'CSS Classes'));

      return $fields;
  }

}