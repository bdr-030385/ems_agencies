<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleCompartments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentVehicleCompartments
 * @property \Cake\ORM\Association\BelongsTo $Vehicles
 * @property \Cake\ORM\Association\HasMany $ChildVehicleCompartments
 *
 * @method \App\Model\Entity\VehicleCompartment get($primaryKey, $options = [])
 * @method \App\Model\Entity\VehicleCompartment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VehicleCompartment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VehicleCompartment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VehicleCompartment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VehicleCompartment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VehicleCompartment findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VehicleCompartmentsTable extends Table
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

        $this->table('vehicle_compartments');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ParentVehicleCompartments', [
            'className' => 'VehicleCompartments',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Vehicles', [
            'foreignKey' => 'vehicle_id',
            'joinType' => 'INNER'
        ]);
        /*$this->hasMany('ChildVehicleCompartments', [
            'className' => 'VehicleCompartments',
            'foreignKey' => 'parent_id'
        ]);*/
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('allow_seal')
            ->allowEmpty('allow_seal');

        $validator
            ->integer('sort')
            ->allowEmpty('sort');

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
        //$rules->add($rules->existsIn(['parent_id'], 'ParentVehicleCompartments'));
        $rules->add($rules->existsIn(['vehicle_id'], 'Vehicles'));

        return $rules;
    }

    public function findLastInsertedDataByVehicleId( Query $query, array $options ){
        if( $options['vehicle_id'] > 0 ){
            $query->select(['VehicleCompartments.sort'])            
            ->where(['VehicleCompartments.vehicle_id' => $options['vehicle_id'], 'VehicleCompartments.sort !=' => 0 ])
            ->order(['VehicleCompartments.sort' => 'DESC'])            
            ;        
        }        
        return $query;
    }
}
