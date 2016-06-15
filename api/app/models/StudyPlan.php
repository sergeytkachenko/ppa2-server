<?php

class StudyPlan extends \Phalcon\Mvc\Model
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
    public $date_start;

    /**
     *
     * @var string
     */
    public $date_end;

    /**
     *
     * @var integer
     */
    public $is_active;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'StudyPlanPrograms', 'study_plan_id', array('alias' => 'StudyPlanPrograms'));
        $this->hasMany('id', 'StudyPlanTopics', 'study_plan_id', array('alias' => 'StudyPlanTopics'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'study_plan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyPlan[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyPlan
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
