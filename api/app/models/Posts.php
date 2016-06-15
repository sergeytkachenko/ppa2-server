<?php

class Posts extends \Phalcon\Mvc\Model
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
    public $alias;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'PostsTargetGroups', 'post_id', array('alias' => 'PostsTargetGroups'));
        $this->hasMany('id', 'Stafflist', 'post', array('alias' => 'Stafflist'));
        $this->hasMany('id', 'UsersPosts', 'post_id', array('alias' => 'UsersPosts'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'posts';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Posts[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Posts
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
