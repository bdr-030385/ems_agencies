<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VendorItem Entity
 *
 * @property int $id
 * @property int $vendor_id
 * @property int $item_id
 * @property string $item_name
 * @property string $item_number
 * @property string $barcode_number
 * @property string $website_link
 * @property float $pack_price
 * @property string $pack_price_uom
 * @property int $pack_quantity
 * @property string $pack_quantity_uom
 * @property int $sub_pack_quantity
 * @property string $sub_pack_quantity_uom
 * @property int $is_preferd_vendor
 * @property string $note
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\Item $item
 */
class VendorItem extends Entity
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
