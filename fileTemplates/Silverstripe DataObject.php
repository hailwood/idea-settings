<?php

class ${NAME} extends DataObject {

	protected static \$db = [
		'Title' => 'Varchar(255)',
		'SortOrder' => 'Int'
 	];
 	
 	protected static \$has_one = [
 	    'Page' => 'Page'
 	];
 	
 	protected static \$default_sort = 'SortOrder';
 	
 	public function getCMSFields(){
 	
 	    \$fields = new FieldList([
 	        TextField::create('Title')
 	    ]);
 	    
 	    return \$fields;
 	
 	}

	public function canView(\$member = null) {
		return Permission::check('CMS_ACCESS_CMSMain', 'any', \$member);
	}

	public function canEdit(\$member = null) {
		return Permission::check('CMS_ACCESS_CMSMain', 'any', \$member);
	}

	public function canDelete(\$member = null) {
		return Permission::check('CMS_ACCESS_CMSMain', 'any', \$member);
	}

	public function canCreate(\$member = null) {
		return Permission::check('CMS_ACCESS_CMSMain', 'any', \$member);
	}

}