<?php
class BlogGridPage extends GridFieldPage {
	
	public static $db = array(
		'Date' => 'Date',
	);
	
	public static $icon = 'bloggrid/images/blogitem.png';
	
	public function formattedPublishDate(){
		return $this->obj('Date')->Format('Y-m-d'); 
	} 

	public function populateDefaults() {
		$this->Date = date('dd-MM-yyyy');
		parent::populateDefaults();
	}

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$Datepckr = new DateField('Date');
		$Datepckr->setConfig('dateformat', 'dd-MM-yyyy'); // global setting
		$Datepckr->setConfig('showcalendar', 1); // field-specific setting
		$fields->addFieldToTab("Root.Main", $Datepckr, 'Content');

		return $fields;
	}
	
}
 
class BlogGridPage_Controller extends GridFieldPage_Controller {
}