<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity.
 *
 * @property int $id
 * @property int $customer_id
 * @property \App\Model\Entity\User $user
 * @property int $status
 * @property int $address_id
 * @property \App\Model\Entity\Addres $addres
 * @property \App\Model\Entity\OrderItem[] $order_items
 * @property \App\Model\Entity\PaymentInfo[] $payment_info
 */
class Order extends Entity
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
