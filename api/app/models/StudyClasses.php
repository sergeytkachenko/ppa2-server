<?php

class StudyClasses extends \Phalcon\Mvc\Model
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
     * @var string
     */
    public $description;

    /**
     *
     * @var integer
     */
    public $city_id;

    /**
     *
     * @var string
     */
    public $address;

     /**
     *
     * @var string
     */
    public $contact_name;

    /**
     *
     * @var string
     */
    public $contact_email;

    /**
     *
     * @var string
     */
    public $phone;

    /**
     *
     * @var integer
     */
    public $capacity;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'StudyClassesEquipments', 'study_class_id', array('alias' => 'StudyClassesEquipments'));
        $this->hasMany('id', 'Trainings', 'study_class_id', array('alias' => 'Trainings'));
        $this->belongsTo('city_id', 'Cities', 'id', array('alias' => 'City'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'study_classes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyClasses[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudyClasses
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
