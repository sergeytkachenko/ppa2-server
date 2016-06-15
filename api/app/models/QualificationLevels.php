<?php

class QualificationLevels extends \Phalcon\Mvc\Model
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'UsersPosts', 'qualification_level_id', array('alias' => 'UsersPosts'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'qualification_levels';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return QualificationLevels[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return QualificationLevels
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
