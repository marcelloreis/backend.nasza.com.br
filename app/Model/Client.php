<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property User $User
 */
class Client extends AppModel {
	/**
	* Display field
	*
	* @var string
	*/
	public $displayField = 'fancy_name';

	/**
	* belongsTo associations
	*
	* @var array
	*/
	public $belongsTo = array('City', 'State');
}
