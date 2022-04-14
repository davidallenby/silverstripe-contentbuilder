<?php
namespace ContentBuilder\Element;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextAreaField;

class GridColumnTestimonial extends GridColumn {
  private static $singular_name = 'Testimonial';

  private static $plural_name = 'Testimonials';

  private static $description = 'Display a card with "testimonial" content';

  private static $table_name = 'GridColumn_Testimonial';
  
  private static $db = [
    'Quote' => 'Text',
    'Name' => 'Text'
  ];


  public function getCMSFields()
  {
      $fields = parent::getCMSFields();
      
      $fields->addFieldToTab('Root.Main', new TextAreaField('Quote'));
      $fields->addFieldToTab('Root.Main', new TextField('Name'));
      return $fields;
  }
}