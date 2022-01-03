<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="orders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('unit_type') ?></th>
                    <th><?= $this->Paginator->sort('invoice_number') ?></th>
                    <th><?= $this->Paginator->sort('reference_number') ?></th>
                    <th><?= $this->Paginator->sort('customer_email') ?></th>
                    <th><?= $this->Paginator->sort('payment_type') ?></th>
                    <th><?= $this->Paginator->sort('commission') ?></th>
                    <th><?= $this->Paginator->sort('adjustment_profit') ?></th>
                    <th><?= $this->Paginator->sort('adjustment_currency') ?></th>
                    <th><?= $this->Paginator->sort('adjustment_attachment_proof_file') ?></th>
                    <th><?= $this->Paginator->sort('cap_link') ?></th>
                    <th><?= $this->Paginator->sort('release_status') ?></th>
                    <th><?= $this->Paginator->sort('release_date') ?></th>
                    <th><?= $this->Paginator->sort('agent_commission_status') ?></th>
                    <th><?= $this->Paginator->sort('agent_comission_release_date') ?></th>
                    <th><?= $this->Paginator->sort('agent_comission_proof_file') ?></th>
                    <th><?= $this->Paginator->sort('org_comission_status') ?></th>
                    <th><?= $this->Paginator->sort('org_comission_release_date') ?></th>
                    <th><?= $this->Paginator->sort('comments') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->id) ?></td>
                    <td><?= h($order->unit_type) ?></td>
                    <td><?= h($order->invoice_number) ?></td>
                    <td><?= h($order->reference_number) ?></td>
                    <td><?= h($order->customer_email) ?></td>
                    <td><?= h($order->payment_type) ?></td>
                    <td><?= h($order->commission) ?></td>
                    <td><?= h($order->adjustment_profit) ?></td>
                    <td><?= h($order->adjustment_currency) ?></td>
                    <td><?= h($order->adjustment_attachment_proof_file) ?></td>
                    <td><?= h($order->cap_link) ?></td>
                    <td><?= h($order->release_status) ?></td>
                    <td><?= h($order->release_date) ?></td>
                    <td><?= h($order->agent_commission_status) ?></td>
                    <td><?= h($order->agent_comission_release_date) ?></td>
                    <td><?= h($order->agent_comission_proof_file) ?></td>
                    <td><?= h($order->org_comission_status) ?></td>
                    <td><?= h($order->org_comission_release_date) ?></td>
                    <td><?= h($order->comments) ?></td>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
