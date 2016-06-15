<?php

class Countries extends \Phalcon\Mvc\Model
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
    public $language;

    /**
     *
     * @var integer
     */
    public $timezone;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'CoursesCountries', 'country_id', array('alias' => 'CoursesCountries'));
        $this->hasMany('id', 'DealersCountries', 'country_id', array('alias' => 'DealersCountries'));
        $this->hasMany('id', 'Regions', 'country_id', array('alias' => 'Regions'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'countries';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Countries[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Countries
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
