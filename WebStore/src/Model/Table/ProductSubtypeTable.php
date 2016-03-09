<?php
namespace App\Model\Table;

use App\Model\Entity\ProductSubtype;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductSubtype Model
 *
 * @property \Cake\ORM\Association\belongsTo $ProductType

 */
class ProductSubtypeTable extends Table
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

        $this->table('product_subtype');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('ProductType', [
            'foreignKey' => 'fkProductTypeID'
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
            ->requirePresence('fkProductTypeID', 'create')
            ->notEmpty('fkProductTypeID');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
