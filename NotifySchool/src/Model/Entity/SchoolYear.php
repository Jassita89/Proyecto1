<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SchoolYear Entity
 *
 * @property int $id
 * @property int $school_id
 * @property int $user_id
 * @property string $descripcion
 * @property int $estado
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\User $user
 */
class SchoolYear extends Entity
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
        'school_id' => true,
        'user_id' => true,
        'descripcion' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'school' => true,
        'user' => true
    ];
}
