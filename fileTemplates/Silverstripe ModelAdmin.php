<?php

class ${NAME} extends ModelAdmin {

	private static \$managed_models = array(
		'${Model_Class}'        => ['title' => '${Model_Title}']
	);

	private static \$url_segment = '${URL_Segment}';

	private static \$menu_title = '${Menu_Title}';

	public function getEditForm(\$id = null, \$fields = null) {
		\$form = parent::getEditForm(\$id, \$fields);

		\$gridFieldName = \$this->sanitiseClassName(\$this->modelClass);
		/** @var GridField \$gridField */
		\$gridField = \$form->Fields()->fieldByName(\$gridFieldName);


		if (\$this->modelClass === '${Model_Class}') {
			// modify the list view.
			\$gridField->getConfig()
			->addComponent(new GridFieldFilterHeader());
		}

		return \$form;
	}
}