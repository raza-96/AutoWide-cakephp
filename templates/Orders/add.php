<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order, ["type" => "file"]) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <?php
										
										echo "<label for='unit_type'>Unit Type</label>";
                    echo $this->Form->select('unit_type', [
											1 => "Stock",
											2 => "Auction"
										], [
											"default" => 1
										]);
                    echo $this->Form->control('invoice_number');
                    echo $this->Form->control('reference_number');
                    echo $this->Form->control('customer_email');
										
										echo "<label for='payment_type'>Payment Type</label>";
                    echo $this->Form->select('payment_type', [
											1 => "Full Payment (100%)",
											2 => "Partial Payment (50%)",
											3 => "Partial Payment (30%)"
										], [
											"default" => 2
										]);
										
                    echo $this->Form->control('commission'); //only for admin
                    echo $this->Form->control('adjustment_profit');
										
										echo "<label for='adjustment_currency'>Adjustment Currency</label>";
                    echo $this->Form->select('adjustment_currency', [
											"USD" => "USD",
											"EUR" => "EUR",
											"GBP" => "GBP"
										], [
											"default" => "USD"
										]);
										
										echo "<label for='adjustment_attachment_proof_file'>Attach Adjustment Proof</label>";
                    echo $this->Form->file('adjustment_attachment_proof_file');
										
                    echo $this->Form->control('cap_link');
										
										echo "<label for='release_status'>Release Status</label>";
                    echo $this->Form->select('release_status', [
											1 => "Released",
											2 => "Not Released"
										]); //only for admin
										
                    echo $this->Form->control('release_date', ['empty' => true]);
										
										echo "<label for='agent_commission_status'>Agent Comission Status</label>";
                    echo $this->Form->select('agent_commission_status', [
											1 => "Paid (100%)",
											2 => "Partial paid (50%)",
											3 => "Pending",
											4 => "On hold",
											5 => "Cancelled"
										], [
											"default" => 3
										]); //only for admin
										
                    echo $this->Form->control('agent_comission_release_date', ['empty' => true]);
										
										echo "<label for='agent_comission_proof_file'>Agent's Comission Proof</label>";
                    echo $this->Form->file('agent_comission_proof_file');
										
										echo "<label for='org_comission_status'>Organisation's Comission Status</label>";
                    echo $this->Form->select('org_comission_status', [
											1 => "Received",
											2 => "Not Received"
										]); //only for admin
										
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
