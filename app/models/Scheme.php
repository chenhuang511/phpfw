<?php

class Scheme extends BaseModel
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=250, nullable=true)
     */
    public $desc;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $role_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $area_id;

    /**
     *
     * @var string
     * @Column(type="string", length=250, nullable=true)
     */
    public $sign;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'SchemePermission', 'scheme_id', ['alias' => 'SchemePermission']);
        $this->hasMany('id', 'SchemeUser', 'scheme_id', ['alias' => 'SchemeUser']);
        $this->belongsTo('area_id', 'Area', 'id', ['alias' => 'Area']);
        $this->belongsTo('role_id', 'Role', 'id', ['alias' => 'Role']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'scheme';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Scheme[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Scheme
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
