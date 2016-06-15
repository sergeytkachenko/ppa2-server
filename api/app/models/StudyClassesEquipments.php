<?php

class StudyClassesEquipments extends \Phalcon\Mvc\Model
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
    public $study_class_id;

    /**
     *
     * @var integer
     */
    public $equipment_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('equipment_id', 'Equipments', 'id', array('alias' => 'Equipment'));
        $this->belongsTo('study_class_id', 'StudyClasses', 'id', array('alias' => 'StudyClass'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'study_classes_equipments';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyClassesEquipments[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyClassesEquipments
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
