<?php
namespace App\Model\Table;

use App\Model\Entity\Proyecto;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proyectos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Alumnos
 */
class ProyectosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('proyectos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Alumnos', [
            'foreignKey' => 'proyecto_id',
            'targetForeignKey' => 'alumno_id',
            'joinTable' => 'alumnos_proyectos'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('num_paginas', 'create')
            ->notEmpty('num_paginas');

        return $validator;
    }
}
