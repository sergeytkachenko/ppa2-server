<?php

class CoursesCountries extends \Phalcon\Mvc\Model
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
    public $course_id;

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
        $this->belongsTo('country_id', 'Countries', 'id', array('alias' => 'Country'));
        $this->belongsTo('course_id', 'Courses', 'id', array('alias' => 'Course'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'courses_countries';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoursesCountries[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoursesCountries
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
