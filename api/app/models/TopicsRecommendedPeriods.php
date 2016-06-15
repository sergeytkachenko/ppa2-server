<?php

class TopicsRecommendedPeriods extends \Phalcon\Mvc\Model
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
     * @var string
     */
    public $date_begin;

    /**
     *
     * @var string
     */
    public $date_end;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('topic_id', 'Topics', 'id', array('alias' => 'Topics'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'topics_recommended_periods';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsRecommendedPeriods[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsRecommendedPeriods
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
