<?php

class Answers extends \Phalcon\Mvc\Model
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
	public $question_id;

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
	public $answer_type_id;

	/**
	 *
	 * @var integer
	 */
	public $is_correct;


    /**
     * Initialize method for model.
     */
    public function initialize()
    {
	    $this->belongsTo('question_id', 'Questions', 'id', array('alias' => 'Question'));
	    $this->belongsTo('answer_type_id', 'AnswerTypes', 'id', array('alias' => 'AnswerType'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'answers';
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
