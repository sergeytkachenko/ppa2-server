<?php

class Stafflist extends \Phalcon\Mvc\Model
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
    public $post;

    /**
     *
     * @var integer
     */
    public $stafflist_group;

    /**
     *
     * @var integer
     */
    public $parent;

    /**
     *
     * @var string
     */
    public $department_title;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Stafflist', 'parent', array('alias' => 'Stafflist'));
        $this->belongsTo('parent', 'Stafflist', 'id', array('alias' => 'Parent'));
        $this->belongsTo('post', 'Posts', 'id', array('alias' => 'Post'));
        $this->belongsTo('stafflist_group', 'StafflistGroup', 'id', array('alias' => 'StafflistGroup'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'stafflist';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Stafflist[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Stafflist
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
