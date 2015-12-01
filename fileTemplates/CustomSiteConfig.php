<?php

/**
 * Class CustomSiteConfig
 *
 * @property SiteConfig \$owner
 */
class CustomSiteConfig extends DataExtension {
	static \$db = [
		'AddressLineOne'      => 'Varchar(255)',
		'AddressLineTwo'      => 'Varchar(255)',
		'AddressLineThree'      => 'Varchar(255)',
		'AddressLineFour'      => 'Varchar(255)',
		'Phone'               => 'Varchar(255)',
		'Fax'                 => 'Varchar(255)',
		'Email'               => 'Varchar(255)',
		'CustomHeaderOutput' => 'Text',
		'CustomFooterOutput' => 'Text'
	];
	
	static \$has_one = array(
		'PrivacyPolicyPage'      => 'SiteTree',
		'TermsAndConditionsPage' => 'SiteTree'
	);


	public function updateCMSFields(FieldList \$fields) {

		/**
		 * Linked Pages
		 */
		\$fields->addFieldsToTab('Root.Main', [
			TextField::create('AddressLineOne'),
			TextField::create('AddressLineTwo'),
			TextField::create('AddressLineThree'),
			TextField::create('AddressLineFour'),
			TextField::create('Phone'),
			TextField::create('Fax'),
			EmailField::create('Email'),
		]);

		/**
		 * Advanced Options
		 */
		\$fields->addFieldsToTab('Root.Advanced', [
			TextareaField::create('CustomHeaderOutput', 'Custom Header Tags'),
			TextareaField::create('CustomFooterOutput', 'Custom Footer Tags')
		]);
	}
}