<?php

class ProgramsTopics extends \Phalcon\Mvc\Model
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
    public $program_id;

    /**
     *
     * @var integer
     */
    public $topic_id;

    /**
     *
     * @var integer
     */
    public $sort;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('program_id', 'Programs', 'id', array('alias' => 'Program'));
        $this->belongsTo('topic_id', 'Topics', 'id', array('alias' => 'Topic'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'programs_topics';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProgramsTopics[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProgramsTopics
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
