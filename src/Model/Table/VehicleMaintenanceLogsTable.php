<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VehicleMaintenanceLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Agencies
 * @property \Cake\ORM\Association\BelongsTo $Vendors
 * @property \Cake\ORM\Association\BelongsTo $Vehicles
 *
 * @method \App\Model\Entity\VehicleMaintenanceLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\VehicleMaintenanceLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VehicleMaintenanceLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VehicleMaintenanceLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VehicleMaintenanceLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VehicleMaintenanceLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VehicleMaintenanceLog findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VehicleMaintenanceLogsTable extends Table
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

        $this->table('vehicle_maintenance_logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Agencies', [
            'foreignKey' => 'agency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Vehicles', [
            'foreignKey' => 'vehicle_id',
            'joinType' => 'INNER'
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
            ->requirePresence('invoice_number', 'create')
            ->notEmpty('invoice_number');

        $validator
            ->requirePresence('mileage', 'create')
            ->notEmpty('mileage');

        $validator
            ->date('date_performed')
            ->requirePresence('date_performed', 'create')
            ->notEmpty('date_performed');

        $validator
            ->requirePresence('submitted_by', 'create')
            ->notEmpty('submitted_by');

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
        $rules->add($rules->existsIn(['agency_id'], 'Agencies'));
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));
        $rules->add($rules->existsIn(['vehicle_id'], 'Vehicles'));

        return $rules;
    }
}
