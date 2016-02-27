<?php
namespace App\Model\Table;

use App\Model\Entity\Alumno;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnos Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Proyectos
 */
class AlumnosTable extends Table
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

        $this->table('alumnos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('Proyectos', [
            'foreignKey' => 'alumno_id',
            'targetForeignKey' => 'proyecto_id',
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');
        
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->date('fecha_nacimiento')
            ->requirePresence('fecha_nacimiento', 'create')
            ->notEmpty('fecha_nacimiento');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->integer('num_natricula')
            ->requirePresence('num_natricula', 'create')
            ->notEmpty('num_natricula');

        $validator
            ->decimal('nota_selectividad')
            ->requirePresence('nota_selectividad', 'create')
            ->notEmpty('nota_selectividad');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
