<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumno Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property \Cake\I18n\Time $fecha_nacimiento
 * @property string $email
 * @property string $telefono
 * @property int $num_natricula
 * @property float $nota_selectividad
 * @property \App\Model\Entity\Proyecto[] $proyectos
 */
class Alumno extends Entity
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
        'nombre' => true,
        'apellidos' => true,
        'fecha_nacimiento' => true,
        'email' => true,
        'telefono' => true,
        'num_natricula' => true,
        'nota_selectividad' => true,
        'password' => true,
        'id' => false,
    ];
}
