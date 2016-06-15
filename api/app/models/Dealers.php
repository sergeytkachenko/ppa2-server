<?php

class Dealers extends \Phalcon\Mvc\Model
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
	 *
	 * @var string
	 */
	public $daimler_code;

	/**
	 *
	 * @var integer
	 */
	public $city_id;

	/**
	 *
	 * @var string
	 */
	public $address;

	/**
	 *
	 * @var integer
	 */
	public $parent_id;

	/**
	 *
	 * @var integer
	 */
	public $stafflist_group_id;

	/**
	 *
	 * @var integer
	 */
	public $status;

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->hasMany('id', 'DealersActivities', 'dealer_id', array('alias' => 'DealersActivities', 'key' => 'Activity'));
		$this->hasMany('id', 'DealersBrands', 'dealer_id', array('alias' => 'DealersBrands', 'key' => 'Brand'));
		$this->hasMany('id', 'DealersControllers', 'dealer_id', array('alias' => 'DealersControllers', 'key' => 'Controller'));
		$this->hasMany('id', 'StafflistPostPlan', 'dealer', array('alias' => 'StafflistPostPlans', 'key' => 'Stafflist'));
		$this->hasMany('id', 'UsersPosts', 'dealer_id', array('alias' => 'UsersPost', 'key' => 'Post'));
		$this->belongsTo('city_id', 'Cities', 'id', array('alias' => 'City'));
		$this->belongsTo('parent_id', 'Dealers', 'id', array('alias' => 'Dealer'));
		$this->belongsTo('stafflist_group_id', 'StafflistGroup', 'id', array('alias' => 'StafflistGroup', 'key' => 'Dealers'));
		$this->belongsTo('status', 'DealerStatuses', 'id', array('alias' => 'DealerStatus'));
		$this->belongsTo('parent_id', 'Dealers', 'id', array('alias' => 'Dealer', 'key' => 'Dealer'));
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Dealers[]
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Dealers
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'dealers';
	}

}
