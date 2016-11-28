<?php

class Permission extends BaseModel
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'SchemePermission', 'permission_id', ['alias' => 'SchemePermission']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'permission';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permission[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Permission
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
