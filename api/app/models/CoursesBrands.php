<?php

class CoursesBrands extends \Phalcon\Mvc\Model
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
    public $course_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('course_id', 'Courses', 'id', array('alias' => 'Course'));
        $this->belongsTo('brand_id', 'Brands', 'id', array('alias' => 'Brand'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'courses_brands';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoursesBrands[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoursesBrands
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
