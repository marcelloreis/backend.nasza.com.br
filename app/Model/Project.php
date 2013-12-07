<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * Esta classe é responsável ​​pela gestão de quase tudo o que acontece a respeito do(a) Estado, 
 * é responsável também pela validação dos seus dados.
 *
 * PHP 5
 *
 * @copyright     Copyright 2013-2013, Nasza Produtora
 * @link          http://www.nasza.com.br/ Nasza(tm) Project
 * @package       app.Model
 *
 * Project Model
 *
 * @property Country $Country
 * @property City $City
 */
class Project extends AppModel {

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
	public $belongsTo = array('Client');

	/**
	* hasAndBelongsToMany associations
	*
	* @var array
	*/
	public $hasAndBelongsToMany = array(
		'Partner' => array(
			'className' => 'Partner',
			'joinTable' => 'projects_pertners',
			'foreignKey' => 'project_id',
			'associationForeignKey' => 'partner_id',
			'unique' => true,
		)
	);	
}
