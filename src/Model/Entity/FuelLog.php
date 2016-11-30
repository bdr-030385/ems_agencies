<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuelLog Entity
 *
 * @property int $id
 * @property int $user_entity_id
 * @property int $vehicle_id
 * @property int $mileage
 * @property string $gas_credit_card_number
 * @property float $gallons_pumped
 * @property \Cake\I18n\Time $date_submitted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\UserEntity $user_entity
 * @property \App\Model\Entity\Vehicle $vehicle
 */
class FuelLog extends Entity
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
