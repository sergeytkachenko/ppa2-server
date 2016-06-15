<?php

class Equipments extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'StudyClassesEquipments', 'equipment_id', array('alias' => 'StudyClassesEquipments'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'equipments';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Equipments[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Equipments
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
