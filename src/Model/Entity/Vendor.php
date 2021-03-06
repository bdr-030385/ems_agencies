<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendor Entity
 *
 * @property int $id
 * @property int $agency_id
 * @property string $vendor_name
 * @property string $phone_number
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $email
 * @property string $website
 * @property string $contact_person
 * @property string $contact_person_phone
 * @property string $contact_person_email
 * @property string $tearms
 * @property string $note
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Agency $agency
 */
class Vendor extends Entity
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
