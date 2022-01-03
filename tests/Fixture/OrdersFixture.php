<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'unit_type' => 'Lorem ipsum dolor sit amet',
                'invoice_number' => 'Lorem ipsum dolor sit amet',
                'reference_number' => 'Lorem ipsum dolor sit amet',
                'customer_email' => 'Lorem ipsum dolor sit amet',
                'payment_type' => 'Lorem ipsum dolor sit amet',
                'commission' => 'Lorem ipsum dolor sit amet',
                'adjustment_profit' => 'Lorem ipsum dolor sit amet',
                'adjustment_currency' => 'Lorem ipsum dolor sit amet',
                'adjustment_attachment_proof_file' => 'Lorem ipsum dolor sit amet',
                'cap_link' => 'Lorem ipsum dolor sit amet',
                'release_status' => 'Lorem ipsum dolor sit amet',
                'release_date' => '2021-12-25',
                'agent_commission_status' => 'Lorem ipsum dolor sit amet',
                'agent_comission_release_date' => '2021-12-25',
                'agent_comission_proof_file' => 'Lorem ipsum dolor sit amet',
                'org_comission_status' => 'Lorem ipsum dolor sit amet',
                'org_comission_release_date' => '2021-12-25',
                'comments' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
