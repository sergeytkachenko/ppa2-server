<?php

class StudyPlanTopics extends \Phalcon\Mvc\Model
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
    public $study_plan_id;

    /**
     *
     * @var integer
     */
    public $topic_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('study_plan_id', 'StudyPlan', 'id', array('alias' => 'StudyPlan'));
        $this->belongsTo('topic_id', 'Topics', 'id', array('alias' => 'Topics'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'study_plan_topics';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyPlanTopics[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyPlanTopics
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}