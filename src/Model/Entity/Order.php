<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string|null $unit_type
 * @property string|null $invoice_number
 * @property string|null $reference_number
 * @property string|null $customer_email
 * @property string|null $payment_type
 * @property string|null $commission
 * @property string|null $adjustment_profit
 * @property string|null $adjustment_currency
 * @property string|null $adjustment_attachment_proof_file
 * @property string|null $cap_link
 * @property string|null $release_status
 * @property \Cake\I18n\FrozenDate|null $release_date
 * @property string|null $agent_commission_status
 * @property \Cake\I18n\FrozenDate|null $agent_comission_release_date
 * @property string|null $agent_comission_proof_file
 * @property string|null $org_comission_status
 * @property \Cake\I18n\FrozenDate|null $org_comission_release_date
 * @property string|null $comments
 * @property int|null $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'unit_type' => true,
        'invoice_number' => true,
        'reference_number' => true,
        'customer_email' => true,
        'payment_type' => true,
        'commission' => true,
        'adjustment_profit' => true,
        'adjustment_currency' => true,
        'adjustment_attachment_proof_file' => true,
        'cap_link' => true,
        'release_status' => true,
        'release_date' => true,
        'agent_commission_status' => true,
        'agent_comission_release_date' => true,
        'agent_comission_proof_file' => true,
        'org_comission_status' => true,
        'org_comission_release_date' => true,
        'comments' => true,
        'user_id' => true,
        'user' => true,
    ];
}
