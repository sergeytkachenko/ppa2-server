<?php

class TargetGroupsTrainView extends \Phalcon\Mvc\Model
{
	use \PPA\Rest\Model\BaseModel, AutocapitalBaseModel;
	/**
	 *
	 * @var integer
	 */
	public $id;

	public $target_group_id;
	
	/**
	 *
	 * @var string
	 */
	public $title;

	/**
	 *
	 * @var integer
	 */
	public $activity_id;

	/**
	 *
	 * @var integer
	 */
	public $brand_id;

	/**
	 *
	 * @var integer
	 */
	public $post_id;

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->belongsTo('target_group_id', 'TargetGroups', 'id', array('alias' => 'TargetGroup'));
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'target_groups_train_view';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TargetGroups[]
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TargetGroups
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

}
