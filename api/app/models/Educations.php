<?php

class Educations extends \Phalcon\Mvc\Model
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
    public $parent_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Educations', 'parent_id', array('alias' => 'Educations', 'key' => 'Parent'));
        $this->hasMany('id', 'UsersEducations', 'education_id', array('alias' => 'UsersEducation', 'key' => 'User'));
        $this->belongsTo('parent_id', 'Educations', 'id', array('alias' => 'Parent', 'key' => 'Educations'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'educations';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Educations[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Educations
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
