<?php

class UsersPosts extends \Phalcon\Mvc\Model
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
    public $user_id;

    /**
     *
     * @var string
     */
    public $rate;

    /**
     *
     * @var integer
     */
    public $post_id;

    /**
     *
     * @var integer
     */
    public $dealer_id;

    /**
     *
     * @var integer
     */
    public $qualification_level_id;

    /**
     *
     * @var integer
     */
    public $activity_id;

    /**
     *
     * @var integer
     */
    public $brand_id;

    /**
     *
     * @var string
     */
    public $actual_position;

    /**
     *
     * @var string
     */
    public $appoint_date;

	/**
	 *
	 * @var integer
	 */
	public $is_main;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('activity_id', 'Activities', 'id', array('alias' => 'Activity', 'key' => 'Activities'));
        $this->belongsTo('brand_id', 'Brands', 'id', array('alias' => 'Brand', 'key' => 'Brands'));
        $this->belongsTo('dealer_id', 'Dealers', 'id', array('alias' => 'Dealer', 'key' => 'Dealers'));
        $this->belongsTo('post_id', 'Posts', 'id', array('alias' => 'Post', 'key' => 'Posts'));
        $this->belongsTo('qualification_level_id', 'QualificationLevels', 'id', array('alias' => 'QualificationLevel', 'key' => 'QualificationLevels'));
        $this->belongsTo('user_id', 'Users', 'id', array('alias' => 'User', 'key' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users_posts';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsersPosts[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UsersPosts
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
