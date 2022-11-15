<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductUser Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property \Cake\I18n\FrozenDate|null $date_dep
 * @property \Cake\I18n\FrozenDate|null $date_ret
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Productrent $productrent
 */
class ProductUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'product_id' => true,
        'date_dep' => true,
        'date_ret' => true,
        'user' => true,
        'productrent' => true,
    ];

protected function _setPassword($password)
{
    if (strlen($password) > 0) {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
}
