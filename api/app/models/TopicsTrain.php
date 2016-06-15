<?php

class TopicsTrain extends \Phalcon\Mvc\Model
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
	public $topic_id;

	/**
	 *
	 * @var integer
	 */
	public $is_must;

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->hasMany('id', 'TopicsTrainActivity', 'topic_train_id', array('alias' => 'TopicsTrainActivity'));
		$this->hasMany('id', 'TopicsTrainBrands', 'topic_train_id', array('alias' => 'TopicsTrainBrands'));
		$this->hasMany('id', 'TopicsTrainPosts', 'topic_train_id', array('alias' => 'TopicsTrainPosts'));
		$this->hasMany('id', 'TopicsTrainQualificationLevels', 'topic_train_id', array('alias' => 'TopicsTrainQualificationLevels'));
		$this->belongsTo('topic_id', 'Topics', 'id', array('alias' => 'Topic'));
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'topics_train';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsObligations[]
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsObligations
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

}
