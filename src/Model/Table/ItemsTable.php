<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Agencies
 * @property \Cake\ORM\Association\BelongsTo $ItemCategories
 * @property \Cake\ORM\Association\BelongsTo $Vendors
 * @property \Cake\ORM\Association\HasMany $ItemExpirations
 * @property \Cake\ORM\Association\HasMany $VendorItems
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemsTable extends Table
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

        $this->table('items');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Agencies', [
            'foreignKey' => 'agency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ItemCategories', [
            'foreignKey' => 'item_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ItemExpirations', [
            'foreignKey' => 'item_id'
        ]);
        $this->hasMany('VendorItems', [
            'foreignKey' => 'item_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->integer('reordering_point')
            ->requirePresence('reordering_point', 'create')
            ->notEmpty('reordering_point');

        $validator
            ->requirePresence('reordering_point_category', 'create')
            ->notEmpty('reordering_point_category');

        $validator
            ->numeric('reordering_amount')
            ->requirePresence('reordering_amount', 'create')
            ->notEmpty('reordering_amount');

        $validator
            ->requirePresence('reordering_amount_category', 'create')
            ->notEmpty('reordering_amount_category');

        $validator
            ->date('expiration_date')
            ->requirePresence('expiration_date', 'create')
            ->notEmpty('expiration_date');

        /*$validator
            ->integer('part_800')
            ->requirePresence('part_800', 'create')
            ->notEmpty('part_800');*/

        $validator
            ->requirePresence('front_stockroom', 'create')
            ->notEmpty('front_stockroom');

        $validator
            ->requirePresence('back_stockroom', 'create')
            ->notEmpty('back_stockroom');

        $validator
            ->requirePresence('rig', 'create')
            ->notEmpty('rig');

        $validator
            ->requirePresence('easv', 'create')
            ->notEmpty('easv');

        $validator
            ->requirePresence('note', 'create')
            ->notEmpty('note');

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
        $rules->add($rules->existsIn(['item_category_id'], 'ItemCategories'));
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));

        return $rules;
    }
}
