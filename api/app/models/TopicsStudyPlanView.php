<?php

class TopicsStudyPlanView extends \Phalcon\Mvc\Model
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
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'topics_study_plan_view';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsStudyPlanView[]
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return TopicsStudyPlanView
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

}
