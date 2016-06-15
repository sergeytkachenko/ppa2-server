<?php

class StafflistPostPlan extends \Phalcon\Mvc\Model
{
	use \PPA\Rest\Model\BaseModel, AutocapitalBaseModel;
	/**
	 *
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @var integer
	 */
	public $stafflist;

	/**
	 *
	 * @var integer
	 */
	public $dealer;

	/**
	 *
	 * @var integer
	 */
	public $activity;

	/**
	 *
	 * @var integer
	 */
	public $brand;

	/**
	 *
	 * @var integer
	 */
	public $post_plan_count;

	/**
	 *
	 * @var integer
	 */
	public $post_plan_total_count;

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->belongsTo('activity', 'Activities', 'id', array('alias' => 'Activity'));
		$this->belongsTo('brand', 'Brands', 'id', array('alias' => 'Brand'));
		$this->belongsTo('dealer', 'Dealers', 'id', array('alias' => 'Dealer'));
		$this->belongsTo('stafflist', 'Stafflist', 'id', array('alias' => 'Stafflist'));
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'stafflist_post_plan';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return StafflistPostPlan[]
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return StafflistPostPlan
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

}
