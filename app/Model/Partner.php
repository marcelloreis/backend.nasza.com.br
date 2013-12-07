<?php
App::uses('AppModel', 'Model');
/**
 * Partner Model
 *
 * @property User $User
 */
class Partner extends AppModel {
	/**
	* Display field
	*
	* @var string
	*/
	public $displayField = 'name';

	/**
	* belongsTo associations
	*
	* @var array
	*/
	public $belongsTo = array('State');
}
