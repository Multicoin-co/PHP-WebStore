<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 *
 * @property int $id
 * @property int $fkProductSubTypeID
 * @property string $name
 * @property string $description
 * @property string $Manufacturer
 * @property float $price
 * @property int $stock
 * @property int $status
 * @property \Cake\I18n\Time $date_added
 * @property \Cake\I18n\Time $date_modified
 * @property \App\Model\Entity\OrderItem[] $order_items
 * @property \App\Model\Entity\ProductImage[] $product_images
 */
class Product extends Entity
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
        'id' => false,
    ];
}
