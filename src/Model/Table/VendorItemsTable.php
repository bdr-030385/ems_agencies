<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VendorItems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Vendors
 * @property \Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\VendorItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\VendorItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\VendorItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VendorItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VendorItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VendorItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\VendorItem findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VendorItemsTable extends Table
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

        $this->table('vendor_items');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id',
            'joinType' => 'INNER'
        ]);
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
            ->requirePresence('item_name', 'create')
            ->notEmpty('item_name');

        $validator
            ->requirePresence('item_number', 'create')
            ->notEmpty('item_number');

        /*$validator
            ->requirePresence('barcode_number', 'create')
            ->notEmpty('barcode_number');

        $validator
            ->requirePresence('website_link', 'create')
            ->notEmpty('website_link');

        $validator
            ->numeric('pack_price')
            ->requirePresence('pack_price', 'create')
            ->notEmpty('pack_price');

        $validator
            ->requirePresence('pack_price_uom', 'create')
            ->notEmpty('pack_price_uom');

        $validator
            ->integer('pack_quantity')
            ->requirePresence('pack_quantity', 'create')
            ->notEmpty('pack_quantity');

        $validator
            ->requirePresence('pack_quantity_uom', 'create')
            ->notEmpty('pack_quantity_uom');

        $validator
            ->integer('sub_pack_quantity')
            ->requirePresence('sub_pack_quantity', 'create')
            ->notEmpty('sub_pack_quantity');

        $validator
            ->requirePresence('sub_pack_quantity_uom', 'create')
            ->notEmpty('sub_pack_quantity_uom');

        $validator
            ->integer('is_preferd_vendor')
            ->requirePresence('is_preferd_vendor', 'create')
            ->notEmpty('is_preferd_vendor');

        $validator
            ->allowEmpty('note');*/

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
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));
        $rules->add($rules->existsIn(['item_id'], 'Items'));

        return $rules;
    }
}
