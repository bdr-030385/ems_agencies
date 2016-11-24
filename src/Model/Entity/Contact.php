<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property int $agency_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email_address
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone_h
 * @property string $phone_c
 * @property string $carrier
 * @property int $emergency_notification_text
 * @property int $emergency_notification_email
 * @property int $information_text
 * @property int $information_email
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Agency $agency
 */
class Contact extends Entity
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
