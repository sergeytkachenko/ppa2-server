<?php

class TopicsTrainActivity extends \Phalcon\Mvc\Model
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
    public $topic_train_id;

    /**
     *
     * @var integer
     */
    public $activity_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('activity_id', 'Activity', 'id', array('alias' => 'Activity'));
        $this->belongsTo('topic_train_id', 'TopicsTrain', 'id', array('alias' => 'TopicsTrain'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'topics_train_activity';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsObligationsActivities[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsObligationsActivities
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
