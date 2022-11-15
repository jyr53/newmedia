<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productrent Model
 *
 * @method \App\Model\Entity\Productrent newEmptyEntity()
 * @method \App\Model\Entity\Productrent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Productrent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Productrent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Productrent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Productrent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Productrent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Productrent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productrent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productrent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productrent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productrent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Productrent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductrentTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('productrent');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
       $this->belongsTo('Gender', [
            'joinTable' => 'gender_id',
            'dependent' => true,]);
       $this->belongsTo('Type', [
            'joinTable'  => 'type_id',
            'dependent' => true,
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('barcode')
            ->maxLength('barcode', 20)
            ->allowEmptyString('barcode');

        $validator
            ->integer('gender_id')
            ->allowEmptyString('gender_id');

        $validator
            ->integer('type_id')
            ->allowEmptyString('type_id');

        $validator
            ->scalar('title')
            ->maxLength('title', 50)
            ->allowEmptyString('title');

        $validator
            ->scalar('author')
            ->maxLength('author', 50)
            ->allowEmptyString('author');

        $validator
            ->scalar('abstract')
            ->maxLength('abstract', 150)
            ->allowEmptyString('abstract');

        return $validator;
    }
}
