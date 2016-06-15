<?php

class UsersEducations extends \Phalcon\Mvc\Model
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
    public $user_id;

    /**
     *
     * @var integer
     */
    public $education_id;

    /**
     *
     * @var string
     */
    public $institution;

    /**
     *
     * @var string
     */
    public $diploma_number;

    /**
     *
     * @var string
     */
    public $diploma_date;

    /**
     *
     * @var string
     */
    public $speciality;

    /**
     *
     * @var string
     */
    public $qualify;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('education_id', 'Educations', 'id', array('alias' => 'Education'));
        $this->belongsTo('user_id', 'Users', 'id', array('alias' => 'User'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users_educations';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsersEducations[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsersEducations
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
