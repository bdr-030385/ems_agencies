<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VehicleMaintenanceLog Entity
 *
 * @property int $id
 * @property int $agency_id
 * @property int $vendor_id
 * @property string $invoice_number
 * @property string $mileage
 * @property \Cake\I18n\Time $date_performed
 * @property int $vehicle_id
 * @property string $submitted_by
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\Vehicle $vehicle
 */
class VehicleMaintenanceLog extends Entity
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
