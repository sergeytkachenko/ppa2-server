<?php

class TopicsMarks extends \Phalcon\Mvc\Model
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
    public $topic_id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var integer
     */
    public $mark;

    /**
     *
     * @var integer
     */
    public $result;

    /**
     *
     * @var string
     */
    public $mark_date;

    /**
     *
     * @var integer
     */
    public $is_confirmed;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('topic_id', 'Topics', 'id', array('alias' => 'Topics'));
        $this->belongsTo('user_id', 'Users', 'id', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'topics_marks';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsMarks[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsMarks
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
