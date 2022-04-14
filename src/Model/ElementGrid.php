<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldDataColumns;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\GridField\GridFieldAddNewButton;
use Symbiote\GridFieldExtensions\GridFieldAddNewMultiClass;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class ElementGrid extends BaseElement
{
  private static $singular_name = 'Grid';

  private static $plural_name = 'Grids';

  private static $description = 'Grid Layout Component';

  private static $table_name = 'CustomElement_Grid';

  private static $inline_editable = false;

  private static $db = [
    'Contained' => 'Boolean(1)',
    'ContainerStyles' => 'Text',
    'AlignTitleCenter' => 'Boolean(1)'
  ];

  private static $has_one = [
    
  ];

  private static $has_many = [
    'GridColumns' => GridColumn::class 
  ];

  private static $owns = [
    'GridColumns',
  ];


  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      // Remove the GridFieldTab
      $fields->removeByName('GridColumns');

      // Create a checkbox to align the title center.
      $fields->addFieldToTab('Root.Main', new CheckboxField('AlignTitleCenter', 'Align the title center?'));

      // Add the custom grid field
      // Set the config
      $c = GridFieldConfig_RecordEditor::create();
      $c->removeComponentsByType(GridFieldAddNewButton::class);
      // Create the gridfield
      $grid = GridField::create(
        'GridColumns',
        'Grid columns',
        $this->GridColumns(),
        $c
      );
      // Add the multiclass add button
      $config = $grid->getConfig();
      $config->addComponent(new GridFieldAddNewMultiClass());
      // Add the reorderable rows component
      if ($this->ID) {
        $config->addComponent(new GridFieldOrderableRows('SortOrder'));
      }
      // Set the data columns to display in the grid
      $cols = $config->getComponentByType(GridFieldDataColumns::class);
      $cols->setDisplayFields([
        'ID' => 'ID',
        'ClassName' => 'Column type'
      ]);

      // Add the gridfield to the main content tab
      $fields->addFieldToTab('Root.Main', $grid);

      // Add the fields to the settings panel
      // Create a field so the user can add inline styles
      $fields->addFieldToTab('Root.Settings', new TextField('ContainerStyles', 'Conatiner inline styles'));
      // Created a checkbox to add/remove the container class
      $fields->addFieldToTab('Root.Settings', new CheckboxField('Contained', 'Add grid to a container?'));

      return $fields;
  }

  public function getType()
  {
      return 'Grid';
  }
}