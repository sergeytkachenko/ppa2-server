<?php

class DealersBrands extends \Phalcon\Mvc\Model
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
    public $brand_id;

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
        $this->belongsTo('brand_id', 'Brands', 'id', array('alias' => 'Brand'));
        $this->belongsTo('dealer_id', 'Dealers', 'id', array('alias' => 'Dealer'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dealers_brands';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DealersBrands[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DealersBrands
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
