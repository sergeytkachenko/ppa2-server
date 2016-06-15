<?php

class Questions extends \Phalcon\Mvc\Model
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
     * @var string
     */
    public $description_ru;

    /**
     *
     * @var string
     */
    public $description_ua;

    /**
     *
     * @var string
     */
    public $description_en;

	/**
	 *
	 * @var integer
	 */
	public $answer_type_id;

	/**
	 *
	 * @var integer
	 */
	public $calculation_method_id;


    /**
     * Initialize method for model.
     */
    public function initialize()
    {
	    $this->hasMany('id', 'Answers', 'question_id', array('alias' => 'Answers'));
	    $this->belongsTo('calculation_method_id', 'CalculationMethods', 'id', array('alias' => 'CalculationMethod'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'questions';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Programs[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Programs
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
