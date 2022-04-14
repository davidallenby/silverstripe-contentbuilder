<?php



use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextAreaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DropdownField;

class ElementTwoColumnTextImage extends BaseElement
{
  private static $singular_name = 'Two Column (Text & Image)';

  private static $plural_name = 'Two Column (Text & Image)';

  private static $description = 'Two column layout with text on one side, image on the other';

  private static $table_name = 'CustomElement_TwoColumnTextImage';

  
  private static $db = [
      'Content' => 'Text',
      'AlignImage' => 'Boolean',
      'ButtonLabel' => 'Text',
      'ButtonLink' => 'Text'
  ];

  private static $has_one = array(
    'Image' => Image::class,
  );

  private static $defaults = [
    'AlignImage' => false
  ];

  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      
      $fields->addFieldToTab('Root.Main', new TextAreaField('Content'));
      // Add the image position (left/right) field
      $fields->addFieldToTab('Root.Main', new DropdownField(
        'AlignImage', 
        'Align image',
        [
          false => "Left",
          true => "Right"
        ]
      ));
      // Add the image field
      $fields->addFieldToTab('Root.Main', UploadField::create('Image'));
      // CTA Button
      $fields->addFieldToTab('Root.Main', new TextField('ButtonLabel'));
      $fields->addFieldToTab('Root.Main', new TextField('ButtonLink'));
      return $fields;
  }

  public function getType()
  {
      return 'Two Column (Text & Image)';
  }
}