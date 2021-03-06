<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cardpaymentdetail'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardpaymentdetails index large-9 medium-8 columns content">
    <h3><?= __('Cardpaymentdetails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('number') ?></th>
                <th><?= $this->Paginator->sort('expiry_date') ?></th>
                <th><?= $this->Paginator->sort('security_code') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cardpaymentdetails as $cardpaymentdetail): ?>
            <tr>
                <td><?= $this->Number->format($cardpaymentdetail->id) ?></td>
                <td><?= $this->Number->format($cardpaymentdetail->type) ?></td>
                <td><?= h($cardpaymentdetail->number) ?></td>
                <td><?= h($cardpaymentdetail->expiry_date) ?></td>
                <td><?= $this->Number->format($cardpaymentdetail->security_code) ?></td>
                <td><?= $this->Number->format($cardpaymentdetail->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cardpaymentdetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cardpaymentdetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cardpaymentdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardpaymentdetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
