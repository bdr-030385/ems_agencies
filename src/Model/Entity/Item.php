<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $agency_id
 * @property string $name
 * @property int $item_category_id
 * @property int $quantity
 * @property int $reordering_point
 * @property string $reordering_point_category
 * @property float $reordering_amount
 * @property string $reordering_amount_category
 * @property int $vendor_id
 * @property \Cake\I18n\Time $expiration_date
 * @property int $part_800
 * @property string $front_stockroom
 * @property string $back_stockroom
 * @property string $rig
 * @property string $easv
 * @property string $note
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\ItemCategory $item_category
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\ItemExpiration[] $item_expirations
 * @property \App\Model\Entity\VendorItem[] $vendor_items
 */
class Item extends Entity
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
