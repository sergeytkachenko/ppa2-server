<?php

class CalculationMethods extends \Phalcon\Mvc\Model
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
    public $title_ru;

    /**
     *
     * @var string
     */
    public $title_ua;

    /**
     *
     * @var string
     */
    public $title_en;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
	    $this->hasMany('id', 'Questions', 'calculation_method_id', array('alias' => 'Questions'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'calculation_methods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Programs[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Programs
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
