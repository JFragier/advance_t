<?php
App::uses('AppModel', 'Model');
/**
 * Data Model
 *
 */
class Data extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'datas';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
