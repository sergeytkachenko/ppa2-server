<?php

class StafflistGroup extends \Phalcon\Mvc\Model
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Stafflist', 'stafflist_group', array('alias' => 'Stafflist', 'key' => 'Post'));
	    $this->hasMany('id', 'Dealers', 'stafflist_group_id', array('alias' => 'Dealers', 'key' => 'StafflistGroup'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'stafflist_group';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StafflistGroup[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StafflistGroup
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
