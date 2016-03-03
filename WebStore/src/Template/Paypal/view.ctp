<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paypal'), ['action' => 'edit', $paypal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paypal'), ['action' => 'delete', $paypal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paypal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paypal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paypal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paypal view large-9 medium-8 columns content">
    <h3><?= h($paypal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($paypal->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($paypal->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($paypal->status) ?></td>
        </tr>
    </table>
</div>
