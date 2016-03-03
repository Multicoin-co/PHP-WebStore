<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cardpaymentdetail'), ['action' => 'edit', $cardpaymentdetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cardpaymentdetail'), ['action' => 'delete', $cardpaymentdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardpaymentdetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cardpaymentdetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cardpaymentdetail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardpaymentdetails view large-9 medium-8 columns content">
    <h3><?= h($cardpaymentdetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Number') ?></th>
            <td><?= h($cardpaymentdetail->number) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cardpaymentdetail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($cardpaymentdetail->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Security Code') ?></th>
            <td><?= $this->Number->format($cardpaymentdetail->security_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($cardpaymentdetail->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Expiry Date') ?></th>
            <td><?= h($cardpaymentdetail->expiry_date) ?></td>
        </tr>
    </table>
</div>
