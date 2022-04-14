<?php
namespace {

	

	class ContentBuilderPage extends Page {
    private static $db = [];

    private static $has_one = [];

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        // Remove the metadata field. We want to add to another tab
        $metadataField = $fields->fieldByName('Root.Main.Metadata');
        $fields->removeFieldFromTab('Root.Main', 'Metadata');
        // Metadata fields
        $fields->addFieldToTab('Root.Metadata', $metadataField);

        return $fields;
    }
	}
}
