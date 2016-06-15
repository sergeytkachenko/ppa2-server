<?php

class TopicsTrainView extends \Phalcon\Mvc\Model
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
	public $title_ru;

	/**
	 *
	 * @var string
	 */
	public $title_ua;

	/**
	 *
	 * @var string
	 */
	public $title_en;

	/**
	 *
	 * @var string
	 */
	public $description_ru;

	/**
	 *
	 * @var string
	 */
	public $description_ua;

	/**
	 *
	 * @var string
	 */
	public $description_en;

	/**
	 *
	 * @var string
	 */
	public $code;

	/**
	 *
	 * @var integer
	 */
	public $topic_type_id;

	/**
	 *
	 * @var integer
	 */
	public $parent_id;

	/**
	 *
	 * @var integer
	 */
	public $is_must;

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
	 *
	 * @var integer
	 */
	public $qualification_level_id;

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo('id', 'Topics', 'id', array('alias' => 'Topic'));
		$this->belongsTo('activity_id', 'Activities', 'id', array('alias' => 'Activity'));
		$this->belongsTo('brand_id', 'Brands', 'id', array('alias' => 'Brand'));
		$this->belongsTo('post_id', 'Posts', 'id', array('alias' => 'Post'));
		$this->belongsTo('qualification_level__id', 'QualificationLevels', 'id', array('alias' => 'QualificationLevel'));
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'topics_train_view';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsTrain[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsTrain
	 */
	public static function findFirst($parameters = null)
	{
		return parent::findFirst($parameters);
	}

}
