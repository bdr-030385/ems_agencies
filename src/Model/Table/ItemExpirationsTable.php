<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItemExpirations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\ItemExpiration get($primaryKey, $options = [])
 * @method \App\Model\Entity\ItemExpiration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ItemExpiration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ItemExpiration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItemExpiration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ItemExpiration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ItemExpiration findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemExpirationsTable extends Table
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

        $this->table('item_expirations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
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
            ->date('expiration_date')
            ->requirePresence('expiration_date', 'create')
            ->notEmpty('expiration_date');

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
        $rules->add($rules->existsIn(['item_id'], 'Items'));

        return $rules;
    }
}
