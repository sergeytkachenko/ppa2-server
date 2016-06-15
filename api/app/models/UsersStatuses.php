<?php

class UsersStatuses extends \Phalcon\Mvc\Model
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
     *
     * @var integer
     */
    public $is_active;

    /**
     *
     * @var string
     */
    public $alias;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Users', 'status_id', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users_statuses';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsersStatuses[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsersStatuses
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
