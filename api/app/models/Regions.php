<?php

class Regions extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    public $country_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Cities', 'region_id', array('alias' => 'Cities'));
        $this->belongsTo('country_id', 'Countries', 'id', array('alias' => 'Country'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'regions';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Regions[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Regions
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
