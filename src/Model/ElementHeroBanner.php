<?php

namespace ContentBuilder\Element;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

class ElementHeroBanner extends BaseElement
{
  private static $singular_name = 'Hero banner';

  private static $plural_name = 'Hero banners';

  private static $description = 'Hero banner that will sit at the top of a page. Acts as the main header for a page';

  private static $table_name = 'CustomElement_HeroBanner';

  private static $has_one = array(
    'BannerImage' => Image::class,
  );

  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      // Add the image field
      $fields->addFieldToTab('Root.Main', UploadField::create('BannerImage'));
      return $fields;
  }

  public function getType()
  {
      return 'Hero banner';
  }
}