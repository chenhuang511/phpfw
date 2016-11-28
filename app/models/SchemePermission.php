<?php

class SchemePermission extends BaseModel
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $scheme_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $permission_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('permission_id', 'Permission', 'id', ['alias' => 'Permission']);
        $this->belongsTo('scheme_id', 'Scheme', 'id', ['alias' => 'Scheme']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'scheme_permission';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SchemePermission[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SchemePermission
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
