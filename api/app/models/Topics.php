<?php

class Topics extends \Phalcon\Mvc\Model
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
	 * @var string
	 */
	public $recommend_long;

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
	 * @var double
	 */
	public $price_uah;

	/**
	 *
	 * @var double
	 */
	public $price_eur;

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->hasMany('id', 'ProgramsTopics', 'topic_id', array('alias' => 'ProgramsTopics'));
		$this->hasMany('id', 'StudyPlanTopics', 'topic_id', array('alias' => 'StudyPlanTopics'));
		$this->hasMany('id', 'TopicsEstimationMethods', 'topic_id', array('alias' => 'TopicsEstimationMethods'));
		$this->hasMany('id', 'TopicsRecommendedPeriods', 'topic_id', array('alias' => 'TopicsRecommendedPeriods'));
		$this->hasMany('id', 'TopicsTrain', 'topic_id', array('alias' => 'TopicsTrain'));
		$this->hasMany('id', 'Trainings', 'topic_id', array('alias' => 'Trainings'));
		$this->belongsTo('parent_id', 'Topics', 'id', array('alias' => 'ParentTopic'));
		$this->belongsTo('topic_type_id', 'TopicsTypes', 'id', array('alias' => 'TopicsType'));
		$this->hasMany('id', 'TopicsMarks', 'topic_id', array('alias' => 'TopicsMarks'));
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'topics';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Topics[]
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Topics
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}
}
