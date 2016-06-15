<?php

class ActivitiesTargetGroups extends \Phalcon\Mvc\Model
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
    public $activity_id;

    /**
     *
     * @var integer
     */
    public $target_group_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('activity_id', 'Activities', 'id', array('alias' => 'Activity'));
        $this->belongsTo('target_group_id', 'TargetGroups', 'id', array('alias' => 'TargetGroup'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'activities_target_groups';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ActivitiesTargetGroups[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ActivitiesTargetGroups
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
