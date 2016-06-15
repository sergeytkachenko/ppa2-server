<?php

class TopicsStudyPlanTrainView extends \Phalcon\Mvc\Model
{
	use \PPA\Rest\Model\BaseModel, AutocapitalBaseModel;

	/**
	 *
	 * @var string
	 */
	public $id;

	/**
	 *
	 * @var integer
	 */
	public $topic_id;

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
	 * @var double
	 */
	public $price_eur;

	/**
	 *
	 * @var double
	 */
	public $price_uah;

	/**
	 *
	 * @var string
	 */
	public $recommend_long;

	/**
	 *
	 * @var integer
	 */
	public $study_plan_id;

	/**
	 *
	 * @var integer
	 */
	public $program_id;

	/**
	 *
	 * @var integer
	 */
	public $program_sort;

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

	public function initialize() {
		$this->belongsTo('activity_id', 'Activities', 'id', array('alias' => 'Activity'));
		$this->belongsTo('brand_id', 'Brands', 'id', array('alias' => 'Brand'));
		$this->belongsTo('parent_id', 'TopicsStudyPlanTrainView', 'id', array('alias' => 'TopicsStudyPlanTrainView'));
		$this->belongsTo('qualification_level_id', 'QualificationLevels', 'id', array('alias' => 'QualificationLevel'));
		$this->belongsTo('study_plan_id', 'StudyPlan', 'id', array('alias' => 'StudyPlan'));
		$this->belongsTo('topic_type_id', 'TopicsTypes', 'id', array('alias' => 'TopicsType'));
		$this->belongsTo('program_id', 'Programs', 'id', array('alias' => 'Program'));
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'topics_study_plan_train_view';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsStudyPlanTrainView[]
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsStudyPlanTrainView
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

}
