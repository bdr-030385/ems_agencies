<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuelLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $UserEntities
 * @property \Cake\ORM\Association\BelongsTo $Vehicles
 *
 * @method \App\Model\Entity\FuelLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\FuelLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FuelLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FuelLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuelLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FuelLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FuelLog findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FuelLogsTable extends Table
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

        $this->table('fuel_logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserEntities', [
            'foreignKey' => 'user_entity_id',
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
            ->integer('mileage')
            ->requirePresence('mileage', 'create')
            ->notEmpty('mileage');

        $validator
            ->requirePresence('gas_credit_card_number', 'create')
            ->notEmpty('gas_credit_card_number');

        $validator
            ->numeric('gallons_pumped')
            ->requirePresence('gallons_pumped', 'create')
            ->notEmpty('gallons_pumped');

        $validator
            ->dateTime('date_submitted')
            ->requirePresence('date_submitted', 'create')
            ->notEmpty('date_submitted');

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
        $rules->add($rules->existsIn(['user_entity_id'], 'UserEntities'));
        $rules->add($rules->existsIn(['vehicle_id'], 'Vehicles'));

        return $rules;
    }
}
