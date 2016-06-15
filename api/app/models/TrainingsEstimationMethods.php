<?php

class TrainingsEstimationMethods extends \Phalcon\Mvc\Model
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
    public $estimation_method_id;

    /**
     *
     * @var integer
     */
    public $max_mark;

    /**
     *
     * @var integer
     */
    public $pass_mark;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('estimation_method_id', 'EstimationMethods', 'id', array('alias' => 'EstimationMethod'));
        $this->belongsTo('training_id', 'Trainings', 'id', array('alias' => 'Training'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'trainings_estimation_methods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TrainingsEstimationMethods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TrainingsEstimationMethods
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
