<?php

class TopicsTrainBrands extends \Phalcon\Mvc\Model
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
    public $brand_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('brand_id', 'Brands', 'id', array('alias' => 'Brand'));
        $this->belongsTo('topic_train_id', 'TopicsTrain', 'id', array('alias' => 'TopicsTrain'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'topics_train_brands';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsObligationsBrands[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TopicsObligationsBrands
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
