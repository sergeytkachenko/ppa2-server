<?php

class TrainingsMarks extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    public $estimation_method_id;

    /**
     *
     * @var integer
     */
    public $mark;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('estimation_method_id', 'EstimationMethods', 'id', array('alias' => 'EstimationMethod'));
        $this->belongsTo('user_id', 'Users', 'id', array('alias' => 'User'));
        $this->belongsTo('training_id', 'Trainings', 'id', array('alias' => 'Training'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'trainings_marks';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TrainingsMarks[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TrainingsMarks
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
