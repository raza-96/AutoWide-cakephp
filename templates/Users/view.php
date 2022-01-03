<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= h($user->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $this->Number->format($user->role) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Orders') ?></h4>
                <?php if (!empty($user->orders)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Unit Type') ?></th>
                            <th><?= __('Invoice Number') ?></th>
                            <th><?= __('Reference Number') ?></th>
                            <th><?= __('Customer Email') ?></th>
                            <th><?= __('Payment Type') ?></th>
                            <th><?= __('Commission') ?></th>
                            <th><?= __('Adjustment Profit') ?></th>
                            <th><?= __('Adjustment Currency') ?></th>
                            <th><?= __('Adjustment Attachment Proof File') ?></th>
                            <th><?= __('Cap Link') ?></th>
                            <th><?= __('Release Status') ?></th>
                            <th><?= __('Release Date') ?></th>
                            <th><?= __('Agent Commission Status') ?></th>
                            <th><?= __('Agent Comission Release Date') ?></th>
                            <th><?= __('Agent Comission Proof File') ?></th>
                            <th><?= __('Org Comission Status') ?></th>
                            <th><?= __('Org Comission Release Date') ?></th>
                            <th><?= __('Comments') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->orders as $orders) : ?>
                        <tr>
                            <td><?= h($orders->id) ?></td>
                            <td><?= h($orders->unit_type) ?></td>
                            <td><?= h($orders->invoice_number) ?></td>
                            <td><?= h($orders->reference_number) ?></td>
                            <td><?= h($orders->customer_email) ?></td>
                            <td><?= h($orders->payment_type) ?></td>
                            <td><?= h($orders->commission) ?></td>
                            <td><?= h($orders->adjustment_profit) ?></td>
                            <td><?= h($orders->adjustment_currency) ?></td>
                            <td><?= h($orders->adjustment_attachment_proof_file) ?></td>
                            <td><?= h($orders->cap_link) ?></td>
                            <td><?= h($orders->release_status) ?></td>
                            <td><?= h($orders->release_date) ?></td>
                            <td><?= h($orders->agent_commission_status) ?></td>
                            <td><?= h($orders->agent_comission_release_date) ?></td>
                            <td><?= h($orders->agent_comission_proof_file) ?></td>
                            <td><?= h($orders->org_comission_status) ?></td>
                            <td><?= h($orders->org_comission_release_date) ?></td>
                            <td><?= h($orders->comments) ?></td>
                            <td><?= h($orders->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
