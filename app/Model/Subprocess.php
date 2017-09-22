<?php
App::uses('AppModel', 'Model');
/**
 * Subprocess Model
 *
 */
class Subprocess extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'subprocess';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
