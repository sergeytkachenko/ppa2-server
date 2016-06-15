<?php

class EstimationMethods extends \Phalcon\Mvc\Model
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
     *
     * @var string
     */
    public $description;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'TopicsEstimationMethods', 'estimation_method_id', array('alias' => 'TopicsEstimationMethods'));
        $this->hasMany('id', 'TrainingsEstimationMethods', 'estimation_method_id', array('alias' => 'TrainingsEstimationMethods'));
        $this->hasMany('id', 'TrainingsMarks', 'estimation_method_id', array('alias' => 'TrainingsMarks'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'estimation_methods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EstimationMethods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EstimationMethods
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
