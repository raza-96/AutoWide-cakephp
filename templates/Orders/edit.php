<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Edit Order') ?></legend>
                <?php
                    echo $this->Form->control('unit_type');
                    echo $this->Form->control('invoice_number');
                    echo $this->Form->control('reference_number');
                    echo $this->Form->control('customer_email');
                    echo $this->Form->control('payment_type');
                    echo $this->Form->control('commission');
                    echo $this->Form->control('adjustment_profit');
                    echo $this->Form->control('adjustment_currency');
                    echo $this->Form->control('adjustment_attachment_proof_file');
                    echo $this->Form->control('cap_link');
                    echo $this->Form->control('release_status');
                    echo $this->Form->control('release_date', ['empty' => true]);
                    echo $this->Form->control('agent_commission_status');
                    echo $this->Form->control('agent_comission_release_date', ['empty' => true]);
                    echo $this->Form->control('agent_comission_proof_file');
                    echo $this->Form->control('org_comission_status');
                    echo $this->Form->control('org_comission_release_date', ['empty' => true]);
                    echo $this->Form->control('comments');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
