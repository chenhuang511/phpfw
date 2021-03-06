<?php

class Area extends BaseModel
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
    public $address;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'AreaDevice', 'area_id', ['alias' => 'AreaDevice']);
        $this->hasMany('id', 'Scheme', 'area_id', ['alias' => 'Scheme']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'area';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Area[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Area
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
