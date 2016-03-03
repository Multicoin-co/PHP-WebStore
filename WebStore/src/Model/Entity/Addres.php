<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity.
 *
 * @property int $id
 * @property string $door_number
 * @property string $postcode
 * @property string $city
 * @property string $street_line_one
 * @property string $street_line_two
 * @property string $tel_number
 * @property string $mobile_number
 * @property bool $deleted
 */
class Addres extends Entity
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
