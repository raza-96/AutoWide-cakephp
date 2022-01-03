<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3><?= h($order->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Unit Type') ?></th>
                    <td><?= h($order->unit_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Invoice Number') ?></th>
                    <td><?= h($order->invoice_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference Number') ?></th>
                    <td><?= h($order->reference_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Email') ?></th>
                    <td><?= h($order->customer_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Type') ?></th>
                    <td><?= h($order->payment_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commission') ?></th>
                    <td><?= h($order->commission) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adjustment Profit') ?></th>
                    <td><?= h($order->adjustment_profit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adjustment Currency') ?></th>
                    <td><?= h($order->adjustment_currency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adjustment Attachment Proof File') ?></th>
                    <td><?= h($order->adjustment_attachment_proof_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cap Link') ?></th>
                    <td><?= h($order->cap_link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Release Status') ?></th>
                    <td><?= h($order->release_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agent Commission Status') ?></th>
                    <td><?= h($order->agent_commission_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agent Comission Proof File') ?></th>
                    <td><?= h($order->agent_comission_proof_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Org Comission Status') ?></th>
                    <td><?= h($order->org_comission_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comments') ?></th>
                    <td><?= h($order->comments) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($order->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Release Date') ?></th>
                    <td><?= h($order->release_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agent Comission Release Date') ?></th>
                    <td><?= h($order->agent_comission_release_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Org Comission Release Date') ?></th>
                    <td><?= h($order->org_comission_release_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
