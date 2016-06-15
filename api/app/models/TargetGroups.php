<?php

class TargetGroups extends \Phalcon\Mvc\Model
{
	use \PPA\Rest\Model\BaseModel, AutocapitalBaseModel;
	/**
	 *
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @var string
	 */
	public $title;

	/**
	 * @virtual
	 * @var string
	 */
	public $train_hash = array();

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->hasMany('id', 'ActivitiesTargetGroups', 'target_group_id', array('alias' => 'ActivitiesTargetGroups'));
		$this->hasMany('id', 'BrandsTargetGroups', 'target_group_id', array('alias' => 'BrandsTargetGroups'));
		$this->hasMany('id', 'PostsTargetGroups', 'target_group_id', array('alias' => 'PostsTargetGroups'));
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'target_groups';
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

	/**
	 * @return array
	 */
	public function fetchTrainHash() {
		$train_hash = array();
		foreach (ActivitiesTargetGroups::findByTargetGroupId($this->id) as $item) {
			$train_hash[] = 'a' . $item->activity_id;
		};
		foreach (BrandsTargetGroups::findByTargetGroupId($this->id) as $item) {
			$train_hash[] = 'b' . $item->brand_id;
		};
		foreach (PostsTargetGroups::findByTargetGroupId($this->id) as $item) {
			$train_hash[] = 'p' . $item->post_id;
		};
		$this->train_hash = $train_hash;
		return $train_hash;
	}

}
