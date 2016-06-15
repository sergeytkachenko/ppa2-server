<?php

class LogChanges extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $model_name;

    /**
     *
     * @var string
     */
    public $column_name;

    /**
     *
     * @var string
     */
    public $old_value;

    /**
     *
     * @var string
     */
    public $new_value;

    /**
     *
     * @var string
     */
    public $type;

    /**
     *
     * @var integer
     */
    public $log_change_group_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('log_change_group_id', 'LogChangeGroups', 'id', array('alias' => 'LogChangeGroups'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'log_changes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LogChanges[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LogChanges
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
