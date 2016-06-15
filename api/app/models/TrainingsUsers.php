<?php

class TrainingsUsers extends \Phalcon\Mvc\Model
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
    public $training_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var double
     */
    public $price;

    /**
     *
     * @var integer
     */
    public $discount;

    /**
     *
     * @var integer
     */
    public $payer_id;

    /**
     *
     * @var integer
     */
    public $is_confirmed;

    /**
     *
     * @var integer
     */
    public $is_passed;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('payer_id', 'Dealers', 'id', array('alias' => 'Dealer'));
        $this->belongsTo('training_id', 'Trainings', 'id', array('alias' => 'Training'));
        $this->belongsTo('user_id', 'Users', 'id', array('alias' => 'User'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'trainings_users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TrainingsUsers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TrainingsUsers
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
