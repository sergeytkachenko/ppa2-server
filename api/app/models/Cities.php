<?php

class Cities extends \Phalcon\Mvc\Model
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
    public $name;

    /**
     *
     * @var string
     */
    public $phone_code;

    /**
     *
     * @var integer
     */
    public $region_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Dealers', 'city_id', array('alias' => 'Dealers'));
        $this->hasMany('id', 'StudyClasses', 'city_id', array('alias' => 'StudyClasses'));
        $this->belongsTo('region_id', 'Regions', 'id', array('alias' => 'Region'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cities';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cities[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cities
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
