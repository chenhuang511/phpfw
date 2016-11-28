<?php

class AreaDevice extends BaseModel
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $area_id;

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $device_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('area_id', 'Area', 'id', ['alias' => 'Area']);
        $this->belongsTo('device_id', 'Device', 'id', ['alias' => 'Device']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'area_device';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AreaDevice[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AreaDevice
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
