<?php


namespace ContentBuilder\Element;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextAreaField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\TextField;

class GridColumnFeaturedImageText extends GridColumn {
  private static $singular_name = 'Featured Image & Text Column';

  private static $plural_name = 'Featured Image & Text Columns';

  private static $description = 'Columns that have a featured image with a title, and text';

  private static $table_name = 'GridColumn_FeaturedImageText';
  
  private static $db = [
    'Title' => 'Text',
    'Content' => 'Text'
  ];

  private static $has_one = [
    'Image' => Image::class
  ];

  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      
      $fields->addFieldToTab('Root.Main', new HeaderField('Header', 'Content'));
      $fields->addFieldToTab('Root.Main', new TextField('Title', 'Title'));
      $fields->addFieldToTab('Root.Main', new TextAreaField('Content', 'Content'));
      // Add the image field
      $fields->addFieldToTab('Root.Main', UploadField::create('Image'));
      return $fields;
  }
}