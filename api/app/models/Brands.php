<?php

class Brands extends \Phalcon\Mvc\Model
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
        $this->hasMany('id', 'BrandsMethodists', 'brand_id', array('alias' => 'BrandsMethodists'));
        $this->hasMany('id', 'BrandsTargetGroups', 'brand_id', array('alias' => 'BrandsTargetGroups'));
        $this->hasMany('id', 'CoursesBrands', 'brand_id', array('alias' => 'CoursesBrands'));
        $this->hasMany('id', 'DealersBrands', 'brand_id', array('alias' => 'DealersBrands'));
        $this->hasMany('id', 'StafflistPostPlan', 'brand', array('alias' => 'StafflistPostPlan'));
        $this->hasMany('id', 'UsersPosts', 'brand_id', array('alias' => 'UsersPosts'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'brands';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Brands[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Brands
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
