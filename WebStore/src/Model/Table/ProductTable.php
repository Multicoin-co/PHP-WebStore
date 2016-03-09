<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Product Model
 *
 * @property \Cake\ORM\Association\HasMany $OrderItems
 * @property \Cake\ORM\Association\HasMany $ProductImages
 * @property \Cake\ORM\Association\belongsTo $ProductSubType
 */
class ProductTable extends Table
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

        $this->table('product');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('OrderItems', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('ProductImages', [
            'foreignKey' => 'product_id'
        ]);
	$this->belongsTo('ProductSubtype', [
	    'foreignKey' => 'fkProductSubTypeID'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('fkProductSubTypeID', 'create')
            ->notEmpty('fkProductSubTypeID');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('Manufacturer', 'create')
            ->notEmpty('Manufacturer');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('stock', 'create')
            ->notEmpty('stock');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('date_added')
            ->requirePresence('date_added', 'create')
            ->notEmpty('date_added');

        $validator
            ->dateTime('date_modified')
            ->requirePresence('date_modified', 'create')
            ->notEmpty('date_modified');

        return $validator;
    }
}
