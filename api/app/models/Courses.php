<?php

class Courses extends \Phalcon\Mvc\Model
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
    public $created;

    /**
     *
     * @var string
     */
    public $code;

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
     *
     * @var integer
     */
    public $preview_picture;

    /**
     *
     * @var string
     */
    public $preview_text;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $active_from;

    /**
     *
     * @var string
     */
    public $active_to;

    /**
     *
     * @var integer
     */
    public $is_active;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'CoursesActivities', 'course_id', array('alias' => 'CoursesActivities'));
        $this->hasMany('id', 'CoursesBrands', 'course_id', array('alias' => 'CoursesBrands'));
        $this->hasMany('id', 'CoursesCountries', 'course_id', array('alias' => 'CoursesCountries'));
        $this->hasMany('id', 'UsersCertifications', 'course_id', array('alias' => 'UsersCertifications'));
        $this->hasMany('id', 'Trainings', 'course_id', array('alias' => 'Trainings'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'courses';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Courses[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Courses
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
