<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Productrent Entity
 *
 * @property int $id
 * @property int|null $barcode
 * @property int|null $genderid
 * @property int|null $typeid
 * @property string|null $title
 * @property string|null $author
 * @property string|null $abstract
 */
class Productrent extends Entity
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
        'barcode' => true,
        'gender_id' => true,
        'type_id' => true,
        'title' => true,
        'author' => true,
        'abstract' => true,
    ];
}
