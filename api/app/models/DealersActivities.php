<?php

class DealersActivities extends \Phalcon\Mvc\Model
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
    public $dealer_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('activity_id', 'Activities', 'id', array('alias' => 'Activity'));
        $this->belongsTo('dealer_id', 'Dealers', 'id', array('alias' => 'Dealer'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dealers_activities';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DealersActivities[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DealersActivities
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
