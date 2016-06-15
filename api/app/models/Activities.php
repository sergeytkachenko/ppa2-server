<?php

class Activities extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    public $parent;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Activities', 'parent', array('alias' => 'Activities'));
        $this->hasMany('id', 'ActivitiesMethodists', 'activity_id', array('alias' => 'ActivitiesMethodists'));
        $this->hasMany('id', 'ActivitiesTargetGroups', 'activity_id', array('alias' => 'ActivitiesTargetGroups'));
        $this->hasMany('id', 'CoursesActivities', 'activity_id', array('alias' => 'CoursesActivities'));
        $this->hasMany('id', 'DealersActivities', 'activity_id', array('alias' => 'DealersActivities'));
        $this->hasMany('id', 'StafflistPostPlan', 'activity', array('alias' => 'StafflistPostPlan'));
        $this->hasMany('id', 'TopicsTrainActivity', 'activity_id', array('alias' => 'TopicsTrainActivity'));
        $this->hasMany('id', 'UsersPosts', 'activity_id', array('alias' => 'UsersPosts'));
        $this->belongsTo('parent', 'Activities', 'id', array('alias' => 'Activity'));
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Activities[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Activities
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'activities';
    }

}
