<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VehicleCompartment Entity
 *
 * @property int $id
 * @property int $parent_id
 * @property int $vehicle_id
 * @property string $name
 * @property string $description
 * @property int $allow_seal
 * @property int $sort
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\ParentVehicleCompartment $parent_vehicle_compartment
 * @property \App\Model\Entity\Vehicle $vehicle
 * @property \App\Model\Entity\ChildVehicleCompartment[] $child_vehicle_compartments
 */
class VehicleCompartment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
