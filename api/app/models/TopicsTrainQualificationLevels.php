<?php

class TopicsTrainQualificationLevels extends \Phalcon\Mvc\Model
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
    public $topic_obligation_id;

    /**
     *
     * @var integer
     */
    public $qualification_level_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('qualification_level_id', 'QualificationLevels', 'id', array('alias' => 'QualificationLevel'));
        $this->belongsTo('topic_train_id', 'TopicsTrain', 'id', array('alias' => 'TopicsTrain'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'topics_train_qualification_levels';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsObligationsQualificationLevels[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsObligationsQualificationLevels
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
