<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contatos Model
 *
 * @method \App\Model\Entity\Contato newEmptyEntity()
 * @method \App\Model\Entity\Contato newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Contato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contato findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Contato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contato[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contato|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContatosTable extends Table
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

        $this->setTable('contatos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        date_default_timezone_set('Brazil/East');
        $this->addBehavior('Timestamp');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_contato')
            ->maxLength('nome_contato', 220)
            ->requirePresence('nome_contato', 'create')
            ->notEmptyString('nome_contato');

        $validator
            ->scalar('telefone_contato')
            ->maxLength('telefone_contato', 24)
            ->requirePresence('telefone_contato', 'create')
            ->notEmptyString('telefone_contato');

        $validator
            ->scalar('email_contato')
            ->maxLength('email_contato', 220)
            ->allowEmptyString('email_contato');

        return $validator;
    }
}
