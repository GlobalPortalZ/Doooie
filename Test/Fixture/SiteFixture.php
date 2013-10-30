<?php
/**
 * SiteFixture
 *
 */
class SiteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'subject_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'title' => array('type' => 'integer', 'null' => false, 'default' => null),
		'description' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'subject_id' => 1,
			'title' => 1,
			'description' => 1
		),
	);

}
