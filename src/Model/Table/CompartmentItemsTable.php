<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompartmentItems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Compartments
 * @property \Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\CompartmentItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompartmentItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompartmentItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompartmentItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompartmentItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompartmentItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompartmentItem findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompartmentItemsTable extends Table
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

        $this->table('compartment_items');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        /*$this->belongsTo('Compartments', [
            'foreignKey' => 'compartment_id',
            'joinType' => 'INNER'
        ]);*/
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
            ->dateTime(' modified')
            ->allowEmpty(' modified');

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
        //$rules->add($rules->existsIn(['compartment_id'], 'Compartments'));
        $rules->add($rules->existsIn(['item_id'], 'Items'));

        return $rules;
    }
}
