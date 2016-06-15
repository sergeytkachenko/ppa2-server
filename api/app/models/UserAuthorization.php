<?php

class UserAuthorization extends \Phalcon\Mvc\Model
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
     * @var string
     */
    public $token;

    /**
     *
     * @var string
     */
    public $last_time;

    /**
     *
     * @var string
     */
    public $expired_time;

    /**
     *
     * @var string
     */
    public $user_agent;

    /**
     *
     * @var string
     */
    public $user_ip;

    /**
     *
     * @var string
     */
    public $user_os;

    /**
     *
     * @var string
     */
    public $session_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('user_id', 'Users', 'id', array('alias' => 'User'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_authorization';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAuthorization[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAuthorization
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
