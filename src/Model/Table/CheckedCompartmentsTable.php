<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CheckedCompartments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $VehicleCompartments
 *
 * @method \App\Model\Entity\CheckedCompartment get($primaryKey, $options = [])
 * @method \App\Model\Entity\CheckedCompartment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CheckedCompartment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CheckedCompartment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CheckedCompartment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CheckedCompartment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CheckedCompartment findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CheckedCompartmentsTable extends Table
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

        $this->table('checked_compartments');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('VehicleCompartments', [
            'foreignKey' => 'vehicle_compartment_id',
            'joinType' => 'LEFT'
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
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['vehicle_compartment_id'], 'VehicleCompartments'));

        return $rules;
    }
}
