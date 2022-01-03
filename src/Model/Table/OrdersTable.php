<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Order newEmptyEntity()
 * @method \App\Model\Entity\Order newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrdersTable extends Table
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

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('unit_type')
            ->maxLength('unit_type', 255)
            ->allowEmptyString('unit_type');

        $validator
            ->scalar('invoice_number')
            ->maxLength('invoice_number', 255)
            ->allowEmptyString('invoice_number');

        $validator
            ->scalar('reference_number')
            ->maxLength('reference_number', 255)
            ->allowEmptyString('reference_number');

        $validator
            ->scalar('customer_email')
            ->maxLength('customer_email', 255)
            ->allowEmptyString('customer_email');

        $validator
            ->scalar('payment_type')
            ->maxLength('payment_type', 255)
            ->allowEmptyString('payment_type');

        $validator
            ->scalar('commission')
            ->maxLength('commission', 255)
            ->allowEmptyString('commission');

        $validator
            ->scalar('adjustment_profit')
            ->maxLength('adjustment_profit', 255)
            ->allowEmptyString('adjustment_profit');

        $validator
            ->scalar('adjustment_currency')
            ->maxLength('adjustment_currency', 255)
            ->allowEmptyString('adjustment_currency');

        $validator
            ->scalar('adjustment_attachment_proof_file')
            ->maxLength('adjustment_attachment_proof_file', 255)
            ->allowEmptyFile('adjustment_attachment_proof_file');

        $validator
            ->scalar('cap_link')
            ->maxLength('cap_link', 255)
            ->allowEmptyString('cap_link');

        $validator
            ->scalar('release_status')
            ->maxLength('release_status', 255)
            ->allowEmptyString('release_status');

        $validator
            ->date('release_date')
            ->allowEmptyDate('release_date');

        $validator
            ->scalar('agent_commission_status')
            ->maxLength('agent_commission_status', 255)
            ->allowEmptyString('agent_commission_status');

        $validator
            ->date('agent_comission_release_date')
            ->allowEmptyDate('agent_comission_release_date');

        $validator
            ->scalar('agent_comission_proof_file')
            ->maxLength('agent_comission_proof_file', 255)
            ->allowEmptyFile('agent_comission_proof_file');

        $validator
            ->scalar('org_comission_status')
            ->maxLength('org_comission_status', 255)
            ->allowEmptyString('org_comission_status');

        $validator
            ->date('org_comission_release_date')
            ->allowEmptyDate('org_comission_release_date');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 255)
            ->allowEmptyString('comments');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
