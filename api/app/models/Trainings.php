<?php

class Trainings extends \Phalcon\Mvc\Model
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
    public $is_active;

    /**
     *
     * @var integer
     */
    public $topic_id;

    /**
     *
     * @var integer
     */
    public $capacity;

    /**
     *
     * @var string
     */
    public $code;

    /**
     *
     * @var string
     */
    public $title;

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
    public $date_start;

    /**
     *
     * @var string
     */
    public $date_end;

    /**
     *
     * @var string
     */
    public $date_reg_start;

    /**
     *
     * @var string
     */
    public $date_reg_end;

    /**
     *
     * @var double
     */
    public $length_days;

    /**
     *
     * @var double
     */
    public $price;

    /**
     *
     * @var integer
     */
    public $currency_id;

    /**
     *
     * @var integer
     */
    public $trainer_id;

    /**
     *
     * @var integer
     */
    public $study_class_id;

	/**
	 *
	 * @var double
	 */
	public $price_uah;

	/**
	 *
	 * @var double
	 */
	public $price_eur;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'TrainingsEstimationMethods', 'training_id', array('alias' => 'TrainingsEstimationMethods', 'key' => 'EstimationMethod'));
        $this->hasMany('id', 'TrainingsMarks', 'training_id', array('alias' => 'TrainingsMarks', 'key' => 'EstimationMethod'));
        $this->hasMany('id', 'TrainingsUsers', 'training_id', array('alias' => 'TrainingsUsers', 'key' => 'User'));
        $this->belongsTo('currency_id', 'CurrencyTypes', 'id', array('alias' => 'CurrencyType'));
        $this->belongsTo('study_class_id', 'StudyClasses', 'id', array('alias' => 'StudyClass'));
        $this->belongsTo('topic_id', 'Topics', 'id', array('alias' => 'Topic'));
        $this->belongsTo('trainer_id', 'Users', 'id', array('alias' => 'User'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'trainings';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Trainings[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Trainings
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
